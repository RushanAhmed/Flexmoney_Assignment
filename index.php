<!DOCTYPE html>
<html>

<head>
    <title>Yoga Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<script>
    function validate() {
        if (document.myForm.fname.value == "") {
            alert("Please provide your First Name!");
            document.myForm.fname.focus();
            return false;
        }

        if (document.myForm.lname.value == "") {
            alert("Please provide your Last Name!");
            document.myForm.lname.focus();
            return false;
        }

        if (document.myForm.email.value == "") {
            alert("Please provide your email!");
            document.myForm.email.focus();
            return false;
        }
        var EmailValid = /^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i;
        var PhoneValid = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

        if (!(document.myForm.email.value.match(EmailValid))) {
            alert("Email is invalid! Please Enter your email!");
            document.myForm.email.focus();
            return false;
        }

        if (!(document.myForm.phone.value.match(PhoneValid))) {
            alert("Phone Number is invalid! Please Enter the Correct Number!");
            document.myForm.phone.focus();
            return false;
        }


        if (document.myForm.phone.value == "") {
            alert("Please provide your phone number!");
            document.myForm.phone.focus();
            return false;
        }

        if (document.myForm.age.value == "") {
            alert("Please provide your age!");
            document.myForm.age.focus();
            return false;
        }

        if(document.getElementById('radio_1').checked == false && document.getElementById('radio_2').checked == false) {
            alert("Please select your Gender!");
            return false;
        }

        if(document.getElementById('radio_b_1').checked == false && document.getElementById('radio_b_2').checked == false && document.getElementById('radio_b_3').checked == false && document.getElementById('radio_b_4').checked == false) {
            alert("Please select your Batch!");
            return false;
        }

        return (true);
    }
</script>

<body>
    <div class="testbox">
        <form name="myForm" action="Complete.php" method="POST" onsubmit="return(validate());">
            <div class="banner">
                <h1>Yoga Application Form</h1>
            </div>
            <div class="item">
                <p>Select Course Date</p>
                <input type="date" name="bdate" required />
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
                <p>Name</p>
                <div class="name-item">
                    <input type="text" id="fname" name="fname" placeholder="First" />
                    <input type="text" id="lname" name="lname" placeholder="Last" />
                </div>
            </div>
            <div class="item">
                <p>Email</p>
                <input type="email" id ="email" name="email" />
            </div>
            <div class="item">
                <p>Phone</p>
                <input type="text" id="phone" name="phone" placeholder="### ### ####" />
            </div>
            <div class="item">
                <p>Age</p>
                <input type="number" id="age" name="age" />
            </div>
            <div class="question">
                <p>Gender</p>
                <div class="question-answer">
                    <div>
                        <input type="radio" value="none" id="radio_1" name="gender" />
                        <label for="radio_1" class="radio"><span>Male</span></label>
                    </div>
                    <div>
                        <input type="radio" value="none" id="radio_2" name="gender" />
                        <label for="radio_2" class="radio"><span>Female</span></label>
                    </div>
                </div>
            </div>

            <div class="question">
                <p>Batch</p>
                <div class="question-answer">
                    <div>
                        <input type="radio" value="none" id="radio_b_1" name="batch" />
                        <label for="radio_b_1" class="radio"><span>6-7AM</span></label>
                    </div>
                    <div>
                        <input type="radio" value="none" id="radio_b_2" name="batch" />
                        <label for="radio_b_2" class="radio"><span>7-8AM</span></label>
                    </div>
                    <div>
                        <input type="radio" value="none" id="radio_b_3" name="batch" />
                        <label for="radio_b_3" class="radio"><span>8-9AM</span></label>
                    </div>
                    <div>
                        <input type="radio" value="none" id="radio_b_4" name="batch" />
                        <label for="radio_b_4" class="radio"><span>5-6PM</span></label>
                    </div>
                </div>
            </div>

            <div class="btn-block">
                <button type="submit" href="/">Send Application</button>
            </div>
        </form>
    </div>
</body>

</html>