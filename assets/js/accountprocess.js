$('#showpassword').on('click',function(){
  var show = $(this).is( ":checked" ) ? 'text' : 'password';
  var todo = $(this).val();

  switch (todo) {

    case '#form-daftar':
      $('#password').attr('type',show);
      $('#repassword').attr('type',show);
      break;

    case '#form-login':
      $('#password').attr('type',show);
      break;
  }
});

/* digunakan untuk melakukan verifikasi pada saat login */
$("#form-login").on('change submit', function(event) {
  var dataString  = $(this).serialize();
  var url         = $('input[name=validate]').val();

  $.post(
    url,
    dataString,
    function(respon) {
      $('#error-email').html(respon.email);
      $('#error-password').html(respon.password);
      $('input[name=confirm]').prop('value', respon.confirm );
    },
  'JSON');

  var dataString  = $(this).serialize();
  var xx = $('input[name=confirm]').val();

  if ( xx != 'continue' ) event.preventDefault();
});

/* digunakan untuk melakukan verifikasi pada saat daftar */
$("#form-daftar").on('change submit', function(event) {
  var dataString  = $(this).serialize();
  var url         = $('input[name=validate]').val();

  $.post(
    url,
    dataString,
    function(respon) {
      $('#error-email').html(respon.email);
      $('#error-password').html(respon.password);
      $('#error-repassword').html(respon.repassword);
      $('input[name=confirm]').prop('value', respon.confirm );
    },
  'JSON');

  var dataString  = $(this).serialize();
  var xx = $('input[name=confirm]').val();

  if ( xx != 'continue' ) event.preventDefault();
});

$('#form-daftar input[name=email]').on('focus change',function(){
  var dataString  = $('#form-daftar').serialize();
  var url         = $('input[name=validate]').val();
  postvalidate( url, dataString, 'email' );
});

$('#form-daftar input[name=password]').on('focus change',function(){
  var dataString  = $('#form-daftar').serialize();
  var url         = $('input[name=validate]').val();
  postvalidate( url, dataString, 'password' );
});

$('#form-daftar input[name=repassword]').on('focus change',function(){
  var dataString  = $('#form-daftar').serialize();
  var url         = $('input[name=validate]').val();
  postvalidate( url, dataString, 'repassword' );
});

/* Digunakan untuk melakukan validasi */
function postvalidate(url, data, choice)
{
  try
  {
    $.post(
      url,
      data,
      function(respon) {
        switch (choice)
        {
          case 'email':
            $('#error-email').html(respon.email);
            break;

          case 'password':
            $('#error-password').html(respon.password);
            break;

          case 'repassword':
            $('#error-repassword').html(respon.repassword);
            break;
        }

        //alert(respon.confirm);
        $('input[name=confirm]').prop('value', respon.confirm );
      },
    'JSON');
  }
  catch (e)
  {
    alert('Terjadi Kesalahan!!!');
  }
}
