<?php
function generateRandomKey() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $key = '';

    // Add at least one alphabet
    $key .= $alphabet[rand(0, strlen($alphabet) - 1)];

    // Generate remaining characters
    $keyLength = rand(1, 5); // Random length between 1 and 5
    // $keyLength = 5;
    for ($i = 0; $i < $keyLength; $i++) {
        $key .= ($i % 2 == 0) ? $alphabet[rand(0, strlen($alphabet) - 1)] : $numbers[rand(0, strlen($numbers) - 1)];
    }

    return $key;
}

$key1 = generateRandomKey();
$key2 = generateRandomKey();

echo "Key 1: $key1\n";
echo "<br>Key 2: $key2\n";



$KEY1 = $_POST['key1'];
$KEY2 = $_POST['key2'];
// get the keys in the post array parameter

//check if they match
if($KEY1 == $key1 && $KEY2 == $key2){
    echo "Checked,They match!";
    echo "Your exeat was generated successfully";
}else{
    echo "Wrong merge key,Contact your exeat merge partner or try again!";
}
?>
<form method="POST" action="random-key.php">
    ENTER KEY 1: <input type="text" name="key1" id="key1">
    ENTER KEY 2: <input type="text" name="key2" id="key2">
    <button type="submit">MERGE EXEAT</button>
</form>