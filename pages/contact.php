<?php include_once('../includes/header.php');
require_once('../crud/database.php');

$submit = $_POST['submit'] ?? null;
if ($submit) {
    $firstname = $_POST['firstname'] ?? null;
    $lastname = $_POST['lastname'] ?? null;
    $region = $_POST['region'] ?? null;
    $province = $_POST['province'] ?? null;
    $city = $_POST['city'] ?? null;
    $barangay = $_POST['barangay'] ?? null;
    $comment = $_POST['comment'] ?? null;

    $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `region`, `province`, `city`, `barangay`, `comment`) 
    VALUES (NULL, '$firstname', '$lastname', '$region', '$province', '$city', '$barangay', '$comment');";
    query($sql);
};
?>

<form action="" method="post">
    <input id="firstname" name="firstname" type="text" placeholder="Firstname" required>
    <input id="lastname" name="lastname" type="text" placeholder="Lastname" required>
    <select name="region" id="region" required onchange="getData(province, `http://localhost/crudapp/api/get-province.php?filter=${region.value}`);">
        <option disabled selected value="">--SELECT REGION--</option>
    </select>
    <select name="province" id="province" required onchange="getData(city, `http://localhost/crudapp/api/get-city.php?filter=${province.value}`);">
        <option disabled selected value="">--SELECT PROVINCE--</option>
    </select>
    <select name="city" id="city" required onchange="getData(barangay, `http://localhost/crudapp/api/get-barangay.php?filter=${city.value}`);">
        <option disabled selected value="">--SELECT CITY--</option>
    </select>
    <select name="barangay" id="barangay" required>
        <option disabled selected value="">--SELECT BARANGAY--</option>
    </select>
    <textarea name="comment" id="comment" cols="30" rows="10" required></textarea>
    <input id="submit" name="submit" type="submit" value="submit">
</form>

<?php include_once('../includes/footer.php') ?>