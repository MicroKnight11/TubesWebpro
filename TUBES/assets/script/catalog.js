$(document).ready(function() {
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
    //defautl tech blom mau keubah jadi selcted
    $('#defaultTech').attr('selected','selected');
    $('#submitBtn').hide();
  });

  

  $('#productTechnology').change(function(){
    $('#submitBtn').show();
    $('#defaultTech').hide();
  });

  $('#submitBtn').hover(function(){
    var family = $("#productFamily option:selected").text()+'/';
    var tech = $("#productTechnology option:selected").text()+'/part-catalog';
    var href = base_url+family+tech;
    $(this).attr('href',href);
  })

    // tabel
      var table = $('#catalogTable').DataTable( {
        "pagingType": "numbers",
        "pageLength": 25,
        "bLengthChange" : false,
        "searching" : false,
        "bInfo" : false,
        columnDefs: [
          { type: 'natural', orderable: false, targets: 0 },
          //sort kolom 3 natural sort blom bener
          { type: 'natural', targets: [1,3,4,5] }
        ],
        order: [[ 0, 'desc' ]]
    } );
      
} );