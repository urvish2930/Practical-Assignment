document.getElementById('quiz-form').addEventListener('submit', function (event)//event listener is added to listen button click on submit
 {

    const options = document.querySelectorAll('input[name="answer"]');//select all radiobutton
    let isChecked = false; 
    for (let option of options) {// loop is used to check any option is selected or not
        if (option.checked) {
            isChecked = true;//here option is selected
            break;
        }
    }
    if (!isChecked) {
        alert("Please select an answer before proceeding.");// error is displayed that no option is selected
        event.preventDefault();// prevent form from being submited empty
    }
});
