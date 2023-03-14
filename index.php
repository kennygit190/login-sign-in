<?php
include'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>👨🏽‍💻</title>
</head>
<body>
    <div class="sign-in-conatiner">
        <form action="">
            <input></input>
        </form>
        <form method="post">
            <label for="name">Names</label>
            <br>
            <input type="text" name="name" placeholder="your names">
            <br>
            <br>
            <label for="email">email</label>
            <br>
            <input type="email" name="email" placeholder="your email">
            <br>
            <br>
            <label for="phone">phone</label>
            <br>
            <input type="text" name="phone" placeholder="your mobile">
            <br>
            <br>
            <label for="password">password</label>
            <br>
            <input type="password" name="password" placeholder="your password">
            <br>
            <br>
            <select name="age" id="">
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
            </select>
            male<input type="radio" name="gender" value="M">
            female<input type="radio" name="gender" value="F">
            <br>
            <br>
            <br>
            <button type="submit" name="submit">signin</button>
        </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];

        $sql="insert into signin(names,email,phone,password,age,gender)values('$name','$email','$phone','$password','$age','$gender')";
        
        $result=mysqli_query($con,$sql);

        if($result){
            echo'succesful install';
        }
        else{
            echo'failed insert
            ';
        }
    }
    ?>
</body>
</html>