
function clickMenuBtn() {
    $('#menu-content').css( 'display', 'block' );
    $('#menu-btn').css( 'opacity', '0' );
    $('#sp_top_logo').css( 'opacity', '0' );
    setTimeout( ()=>{    $('#menu-btn').css( 'display', 'none' );} ,500);
    setTimeout( ()=>{    $('#menu-content').css( 'opacity', '1' );} ,100);
}

function clickMenuBtn2() {
    $('#menu-content').css( 'opacity', '0' );
    $('#menu-btn').css( 'display', 'flex' );
    $('#sp_top_logo').css( 'opacity', '1' );
    setTimeout( ()=>{    $('#menu-btn').css( 'opacity', '1' );} ,500);
    setTimeout( ()=>{    $('#menu-content').css( 'display', 'none' );} ,1000);
}

function clickService() {
    $('#service_list').css( 'display', 'block' );
}


function clickRegistButton() {
    document.forms.regist_form.submit();
}

function clickEditButton() {
    document.forms.edit_form.submit();
  }
    
  

function fileCheckMain(){

    let file_btn = $("#file_btn_main");
  
    // addEventListener() の jQuery による略記
    file_btn.off('change');
    file_btn.on("change", function(evt){
  
    // 変数 $file_btn に格納済みのjQueryオブジェクトを使っても良い。
    let elm = file_btn[0];
    // プレビュー処理など。

    $('.img_tmb_main').html('');
    var file = elm.files;

    var img_count = 1;
    $(file).each(function(i) {
    // 8枚まで
    if (img_count > 8) {
        return false;
    }

    if (! file[i].type.match('image.*')) {
        $(this).val('');
        elm.value = null;
        alert(`画像ファイルを選択してください` );
        $('.img_tmb_main').html('');
        return;
    }

    var reader = new FileReader();
    reader.onload = function() {
        var img_src = $('<img>').attr('src', reader.result);
        $('.img_tmb_main').append(img_src);
    }
    reader.readAsDataURL(file[i]);

    img_count = img_count + 1;
    });
  
  })
};
