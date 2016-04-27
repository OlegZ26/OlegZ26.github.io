function process() {

    var valid = true;
    var error = '';
    var $alert = $(".alert-box");
    $alert.hide();
    
    function checkLength(value, len) {
        return (value.length > 0 && value.length <= len);
    }
    
    function showAlert(errorMessage) {
        $alert.text(errorMessage);
        $alert.show();
        $alert.css({display:'block'});    
    }
    
    function validate(name, value, maxlen) {
        error = '';
        if (checkLength(value, maxlen) == false) {
            error = 'Поле не должно быть пустым.';
            return false;
        }
        
        switch (name) {
        case 'firstName':
        case 'lastName':
        case 'middleName':
            if (value.length < 2) {
                error = 'Слишком короткое.';
                return false;
            }
            if (/^[А-ЯІЇЄҐЫЭЁ\-]+$/.test(value.toUpperCase()) == false) {
                error = 'ФИО заполняется кириллицей';
                return false;
            }
            return true;
        case 'phone':
            if (value.length < 10) {
                error = 'Номер должен быть из 10 цифр. Например: 0502240123';
                return false;
            }
            if (/^([0-9]){3,10}$/.test(value) == false) {
                error = 'Номер должен быть из цифр. Без пробелов и тире.';
                return false;
            }
            if (/^0(39|50|63|66|67|68|91|92|93|94|95|96|97|98|99)[0-9]{7}$/i.test(value) == false) {
                error = 'Неизвестный оператор.';
                return false;
            }
            return true;
        case 'e-mail':
            break;
        case 'inn':
            if (/^[0-9]{10}$/i.test(value) == false) {
                error = 'Идентификационный номер должен быть из 10 цифр.';
                return false;
            }
            break;
        case 'age':
            if (value > 24 && value < 99)
                return true;
            error = 'Вы слишком молоды.';
            return false;
            
        default:
            return true;
        }
        
        return true;
    }
    
    $("#requestForm input[type=text]").each(function() {
        var maxlen = this.maxLength;
        var name   = this.name;
        var value  = this.value;
        //console.log('-- name: '+name+' = '+value);

        if (validate(name, value, maxlen) == false) {
            valid = false;
            $(this).addClass('error');
            $(this).blur(function() {
                if (validate(this.name, this.value, this.maxLength)) {
                    $(this).removeClass('error');
                    $alert.hide();
                } else {
                    showAlert(error);
                }
            });
            showAlert(error);
            return false;
        }
        $(this).removeClass('error');
    });
    return valid;
}