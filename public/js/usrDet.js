function register() {
    age = document.querySelector('.usrEdit input[name="ageEdit"]').value;
    phone = document.querySelector('.usrEdit input[name="phoneEdit"]').value;
    sex = document.querySelector('.usrEdit input[name="sexEdit"]').value;
    blood = document.querySelector('.usrEdit input[name="bloodEdit"]').value;
    weight = document.querySelector('.usrEdit input[name="weightEdit"]').value;
    birth_date = document.querySelector('.usrEdit input[name="birth_dateEdit"]').value;



    jQuery.post('src/ps/usrDet.php',{
            age:age,
            phone:phone,
            sex:sex,
            blood:blood,
            weight:weight,
            birth_date:birth_date
        },
        function (data){
            console.log(data);
        }
    );

}