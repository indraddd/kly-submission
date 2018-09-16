
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
    $('#submit').click(function(e){
        if($('#nama').val().length > 50 || $.trim($('#nama').val()) == ''){
            e.preventDefault();
            alert('Something wrongwith the name');
        }else if($.trim($('#email').val()) == ''){
            alert('email can not be left blank');
            e.preventDefault();
        }else if($.trim($('#date_of_birth').val()) == ''){
            alert('DOB can not be left blank');
            e.preventDefault();
        }else if($('#alamat').val().length > 100 || $.trim($('#alamat').val()) == ''){
            e.preventDefault();
            alert('Something wrongwith the address');
        }else{
            console.log('ok');
        }
    });
});
</script>
</body>
</html>