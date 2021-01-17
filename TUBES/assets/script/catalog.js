$(document).ready(function() {
  // tabel
  var table = $('#catalogTable').DataTable( {
    "pagingType": "numbers",
    "pageLength": 25,
    "bLengthChange" : false,
    "searching" : false,
    "bInfo" : false,
    columnDefs: [
      { type: 'natural', orderable: false, targets: 0 },
      { type: 'natural', targets: [1,3,4,5] }
    ],
    order: [[ 0, 'desc' ]]
  } );

  // select
  $('#productFamily').change(function(){
    var val = $(this).children("option:selected").val();
    $('#productTechnology').children().each(function(){
      if ($(this).val() == val){
        $(this).show();
      }
      else {
        $(this).hide();
      }
    });
    $('#productTechnology').show();
    $('#defaultFamily').hide();
    $('#defaultTech').show();
    $('#productTechnology').val($('#defaultTech').val());
    $('#submitBtn').hide();
  });

  $('#productTechnology').change(function(){
    $('#submitBtn').show();
    $('#defaultTech').hide();
  });

  $('#submitBtn').hover(function(){
    let family = $("#productFamily option:selected").text()+'/';
    let tech = $("#productTechnology option:selected").text()+'/part-catalog';
    let href = base_url+family+tech;
    $(this).attr('href',href);
  })

  // tambah
  $('#btn_tambah').click(function(){
    $('.input').val('');
  })
  
  $('#form_tambah').submit(function(e){
    e.preventDefault(); 
    let dataForm = $('#form_tambah').serialize();
    $.ajax({
        url:base_url+'index.php/controller/addData',
        type:"post",
        data: dataForm,
        dataType:"json",
        success: function(response){
            alert(response.state);
            if(response.state == "new data created"){
                $('#modalTambah').modal('toggle');
                table.row.add(Object.values(response)).draw();
                // increment counter
                $('#counter').text(function(){
                  let value = $('#counter').text();
                  value = value.replace(/(\d+)/, function(n){
                    return parseInt(n) + 1; // parse to int and increment number
                  }); // replace using pattern
                  return value;
                });
            }
        }
    });
    return false; 
  });

  // open edit option

  var rowSelected;
  var id;
  
  $(document).on('click', 'h7 > a', function(e){
    e.preventDefault();
    $('.input').val('');
    rowSelected = $(this).parents('tr');
    rowSelected.toggleClass('selected');
    let data = 'name=' + $(this).text();
    $.ajax({
      url:base_url+'index.php/controller/getData',
      type:"post",
      data:data,
      dataType:"json",
      success: function(response){
        id = response[0].id;
        $('#inputNama').val(response[0].name);
        $('#inputDensity').val(response[0].density);
        $('#inputStatus').val(response[0].status);
        $('#inputDepth').val(response[0].depth);
        $('#inputWidth').val(response[0].width);
        $('#inputTemp').val(response[0].temp);
        $('#inputSpeed').val(response[0].speed);
      }
    });
  });  

  //edit
  $('#edit_btn').click(function(e){
    e.preventDefault(); 
    let dataForm = 'id=' + id + '&' + $('#form_edit').serialize();
    $.ajax({
        url:base_url+'index.php/controller/editData',
        type:"post",
        data: dataForm,
        dataType:"json",
        success: function(res){
            alert(res.state);
            if(res.state == "data edited"){
              delete res.state;
              res.name = "<h7><a href='#' data-toggle='modal' data-target='#modalEdit'>"+res.name;
              table.row('.selected').data(Object.values(res)).draw();
              rowSelected.toggleClass('selected');
              $('#modalEdit').modal('toggle');
            }
        }
    });
    return false; 
  });

  // Delete
  $('#delete_btn').click(function(e){
    e.preventDefault();
    if(confirm('Are you sure want to delete '+$('#inputNama').val())){
      let dataId = 'id=' + id; 
      $.ajax({
          url:base_url+'index.php/controller/deleteData',
          type:"post",
          data:dataId, 
          success: function(res){
            alert(res);
            if(res == 'data deleted successfully'){
                table.row('.selected').remove().draw(false);
                $('#modalEdit').modal('toggle');
                // decrement counter
                $('#counter').text(function(){
                  let value = $('#counter').text();
                  value = value.replace(/(\d+)/, function(n){
                    return parseInt(n) - 1; // parse to int and decrement number
                  }); // replace using pattern
                  return value;
                });
            }
          }
      });
    } 
    return false; 
  });
} );