<html>
<link rel="stylesheet" href="function.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<body>
<div class="container">

    <form action="" method="post">
        <div class="form-group">
            <label>geben sie die erste zahl:</label>
            <input class="form-control" type="number" name="n1" required >
        </div>
        <div class="form-group">
            <label>geben sie die zweite zahl :</label>
            <input class="form-control" type="number" name="n2" required >
        </div>
        <div class="form-group">
            <label>Operation</label>
            <select class="form-control" name="operation" required>
                <option  value="add">add</option>
                <option  value="sub">sub</option>
                <option value="div">min</option>
                <option value="mul">mul</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
</div>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $number1=$_POST['n1'];
    $number2=$_POST['n2'];
    if (isset($_POST['operation'])) {
        $select1 = $_POST['operation'];
        switch ($select1) {
            case 'add':
                $result= $number1+$number2;
                echo "<p>Die addition von $number1 und $number2 ist $result</p>";
                break;
            case 'sub':
                $result= $number1-$number2;
                echo "<p>Der substraction von $number1 und $number2 ist $result</p>";
                break;
            case 'div':
                $result= $number1/$number2;
                echo "<p>Der quotient von $number1 durch $number2 ist $result</p>";
            case 'mul':
                $result= $number1*$number2;
                echo "<p>Der multiplikation von $number1 und $number2 ist :$result</p>";
                break;
        }
    }

}
?>