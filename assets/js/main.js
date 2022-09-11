$(document)
.on("submit", "form.js-register", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var data = {
        name: $("input[type='text']", _form).val(),
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }
    if(data.email.length < 6)
    {
        _error.text("Plese enter a valid email address").show();
        return false;
    }
    else if(data.password.length < 10)
    {
        _error.text("Please enter a passphrase 11 characters long").show();
        return false;
    }

_error.hide();

$.ajax({
    type: 'POST',
    url: 'ajax/register.php',
    data: data,
    dataType:'json',
    async: true,
})
.done(function ajaxDone(data) {
    //whatever data is
    console.log(data)
    if(data.redirect !== undefined){
        // window.location = data.redirect;
    } else if (data.error !== undefined)
    {
        _error.text(data.error).show();
    }
})
.fail(function ajaxFailed(e){
    //This Failed
    console.log(e)
})
.always(function ajaxAlwaysDoThis(data){
    //Always do
    console.log("Always")
})
return false;

})

$(document)
.on("submit", "form.js-login", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }
    if(data.email.length < 6)
    {
        _error.text("Plese enter a valid email address").show();
        return false;
    }
    else if(data.password.length < 10)
    {
        _error.text("Please enter a passphrase 11 characters long").show();
        return false;
    }

_error.hide();

$.ajax({
    type: 'POST',
    url: 'ajax/login.php',
    data: data,
    dataType:'json',
    async: true,
})
.done(function ajaxDone(data) {
    //whatever data is
    console.log(data)
    if(data.redirect !== undefined){
        window.location = data.redirect;
    } else if (data.error !== undefined)
    {
        _error.html(data.error).show();
    }
})
.fail(function ajaxFailed(e){
    //This Failed
    console.log(e)
})
.always(function ajaxAlwaysDoThis(data){
    //Always do
    console.log("Always")
})
return false;

})