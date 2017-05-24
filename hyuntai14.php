<form action="hyuntai15.php" method="get">
    name:<input type="text" name="nameg[]" /><br>
    name:<input type="text" name="nameg[]" /><br>
    Account:<input type="text" name="account" /><br>
    Password:<input type="password" name="passwd" /><br>
    Birthday:<input type="date" name="birthday" /><br>
    <select name="area">
        <option value="400">北屯區</option>
        <option value="401">南屯區</option>
        <option value="402">中屯區</option>
        <option value="403">西屯區</option>
    </select>

    <input type="submit" name="gender">Boy</input>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打電動
    <input type="checkbox" name="like[]" value="3">打電玩
    <input type="checkbox" name="like[]" value="4">打果計
    <input type="checkbox" name="like[]" value="5">打小孩<br>
    <input type="file" name="file" /><br>
    <input type="submit" name="button1" value="送出1" /><br>
    <input type="submit" name="button2" value="送出2" /><br>
    <input type="submit" name="button3" value="送出3" /><br>
</form>