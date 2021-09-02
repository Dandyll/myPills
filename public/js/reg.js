function register() {
    name = document.querySelector('.registerr input[name="nameR"]').value;
    surname = document.querySelector('.registerr input[name="SurnameR"]').value;
    email = document.querySelector('.registerr input[name="emailR"]').value;
    password = document.querySelector('.registerr input[name="passwordR"]').value;



    jQuery.post('src/ps/register.php',{
        name:name,
        surname:surname,
        email:email,
        password:password
    },
        function (data){
        console.log(data);
            alert("Registration Successful");
        }

        );

}