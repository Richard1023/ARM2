
    function showSuccessToast() {
        $().toastmessage('showSuccessToast', "Групу успішно додано");
    }

    function showSuccessToastReg_ok() {
        $().toastmessage('showSuccessToast', "Студента успішно додано");
    }

    function showSuccessToastResave() {
        $().toastmessage('showSuccessToast', "Зміни збережено");
    }


    function showNoticeToast() {
        $().toastmessage('showNoticeToast', "Notice  Dialog which is fading away ...");
    }

  
    function showWarningToast() {
        $().toastmessage('showWarningToast', "Warning Dialog which is fading away ...");
    }


    function showErrorToast() {
        $().toastmessage('showErrorToast', "Невірний логін або пароль");
    }

    function showErrorToastNull() {
        $().toastmessage('showErrorToast', "Ви заповнили не всі поля");
    }

    function showErrorToastLogin() {
        $().toastmessage('showErrorToast', "Введений логін вже зайнято");
    }

    function showErrorToastReg_bad() {
        $().toastmessage('showErrorToast', "Помилка! Ви не зареєстровані");
    }

    if(window.location.hash == "#error") {
 	showErrorToast();
    }