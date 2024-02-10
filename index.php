<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Discord Application Command Builder</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link rel="icon" href="fav.bmp">
<meta name="description" content="Discord Application Command Builder is a easy way to create, update or delete Slash Commands for your Discord bot">
<meta name="keywords" content="Create, Delete, Update, Discord Application Commands">
<meta name="robots" content="noodp,noydir" />
<script src="https://kit.fontawesome.com/7164538be3.js" crossorigin="anonymous"></script>
<style>  
body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, 'FontAwesome';
margin: 20px 0 50px; 
background-color: #36393f;
color: #fff;
}
h1, h2, h3, h4 {
color: #7289da;
text-align: center; 
}
form {
max-width: 600px;
margin: 0 auto;
}
label {
display: block;
margin-bottom: 5px;
}
input, select, textarea {
width: 100%;
padding: 8px;
margin-bottom: 10px;
box-sizing: border-box;
background-color: #2f3136; 
color: #fff;
border: none;
border-radius: 4px;
}

input[type="submit"], .add-option, .add-choice, .remove-option, .remove-choice {
background-color: #7289da;
color: white;
cursor: pointer;
border: none;
border-radius: 4px;
padding: 10px; 
margin-right: 10px; 
}
.add-option, .remove-option, .add-choice, .remove-choice {
margin-top: 10px;
}
.add-option {
margin-right: 10px; 
margin-bottom: 10px; 
}
input[type="submit"]:hover, .add-option:hover, .add-choice:hover {
background-color: #677bc4; 
}
.option-container, .choice-container {
margin-bottom: 10px;
}
label.checkbox-label {
display: flex;
align-items: center;
margin-bottom: 10px;
}
input[type="checkbox"] {
width: 20px;
height: 20px;
margin-right: 5px;
border-radius: 5px; 
}
label.dropdown-label {
display: flex;
align-items: center;
margin-bottom: 10px;
}
select {
width: 100%;
padding: 8px;
box-sizing: border-box;
background-color: #2f3136;
color: #fff;
border: none;
border-radius: 4px;
margin-right: 5px;
}

.json-preview {
background-color: #36393f;
color: #fff;
padding: 10px;
margin-top: 20px;
border-radius: 4px;
white-space: pre-line;
}
.json-preview {
background-color: #202225; 
color: #fff;
padding: 10px;
margin-top: 20px;
border-radius: 4px;
white-space: pre;
font-family: 'Courier New', monospace;
overflow: auto;
border: 2px solid #7289da; 
box-shadow: 0 0 10px rgba(114, 137, 218, 0.5); 
margin-bottom: 20px;
}
p {
text-align: center;
margin-bottom: 20px;
}
.read-me-button {
cursor: pointer;
background-color: #202225;
color: white;
border: none;
border-radius: 2px;
padding: 15px 15px; 
margin-bottom: 10px;
font-size: 14px;
width: 600px;
margin-top: 10px;
}

.modal {
display: none;
position: fixed;
z-index: 1;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgb(0, 0, 0);
background-color: rgba(0, 0, 0, 0.4);
padding-top: 60px;
}
.modal-content {
background-color: #36393f;
color: #fff;
margin: 5% auto;
padding: 20px;
border: 1px solid #7289da;
border-radius: 4px;
max-width: 600px;
}
.close {
color: #7289da;
float: right;
font-size: 28px;
font-weight: bold;
}
.footer {
color: #fff;
text-align: center;
padding: 10px;
position: fixed;
bottom: 0;
width: 100%;
display: flex;
align-items: center;
justify-content: center;
font-size: 14px;
}
.footer-text {
color: #202225;
text-decoration: none;
transition: color 0.3s;
text-align: center;
}
.footer-text:hover {
color: #000;
}
.remove-option, .remove-choice {
background-color: #ff6666;
color: white;
cursor: pointer;
border: none;
border-radius: 4px;
padding: 10px;
margin-right: 10px;
}
.remove-option:hover, .remove-choice:hover {
background-color: #ff4c4c; 
}
.back-button {
width: 100%;
margin-top: 10px; 
}
.option-container {
    border-bottom: 1px solid #7289da;
    margin-bottom: 10px;
    padding-bottom: 10px;
}

.send {
background-color: #7289da;
color: white;
cursor: pointer;
border: none;
border-radius: 4px;
padding: 10px;
margin-bottom: 10px;
margin-right: 10px; 
width:100%;
}
.send:hover{
background-color: #677bc4; 
}
</style>
</head>
<body>
<div id="notification-box" class="notification hidden"><p id="notification-message"></p></div>
<div id="myModal" class="modal">
<div class="modal-content">
<span class="close" onclick="closeModal()">&times;</span>
<h2>General Information</h2>
<div style='background-color: #3498db; padding: 15px; border: 1px solid #2980b9; border-radius: 5px; margin-top: 20px; color: #fff;'>
<p>1. If you create a command with the same name as an existing one, it will update with new information.</p>
<p>2. When deleting a command, remember to input the command ID into the command name field. You can find it by right-clicking the command in "Manage Integration" and copying the ID using Discord.</p>
<p>3. Use the "Create JSON" button if you prefer not to expose the bot token and post the JSON using Postman.</p>
<p><a href="https://www.postman.com/discord-api">https://www.postman.com/discord-api</a></p>
</div>
<div style='background-color: #ff4c4c; padding: 10px; border: 1px solid #ff4c4c; margin-top: 10px; color: #fff; border-radius: 5px; font-size: 14px;'>
<strong style='color: #fff;'><i class="fa-solid fa-triangle-exclamation"></i> Warning:</strong> Ensure to reset the bot token after creating all your commands
</div>
<div style='background-color: #ff4c4c; padding: 10px; border: 1px solid #ff4c4c; margin-top: 10px; color: #fff; border-radius: 5px; font-size: 14px;'>
<strong style='color: #fff;'><i class="fa-solid fa-triangle-exclamation"></i> Warning:</strong> There is a global rate limit of 200 application command creates per day, per guild.
</div>
<hr>
<div style='background-color: #ffd700; padding: 10px; border: 1px solid #ffd700; margin-top: 10px; color: #000; border-radius: 5px; font-size: 14px;'>
<strong style='color: #000;'><i class="fa-solid fa-circle-exclamation"></i> Notice:</strong> This platform does not retain or monitor any user information. It solely utilizes a straightforward HTTP post to interact with the Discord REST API.
</div>
</div>
</div>


<h1>Discord Command Application Builder</h1>
<?php
error_reporting(0);
if ($_POST['submit'] || $_POST['createJSON']) {
$botToken = $_POST['botToken'];
$botToken = $_POST['botToken'];
$applicationID = $_POST['applicationID'];
$deleteCommand = $_POST['deleteCommand'];
$commandName = $_POST['commandName'];
$commandDescription = $_POST['commandDescription'];
$adminPermission = isset($_POST['adminPermission']) && $_POST['adminPermission'] === '1';
$options = $_POST['optionName'];
$optionDescriptions = $_POST['optionDescription'];
$isRequired = $_POST['isRequired'];
$optionTypes = $_POST['optionType'];
$choices = $_POST['choiceName'];
$choiceDescriptions = $_POST['choiceDescription'];
if (!$adminPermission) {
$commandData = [
"name" => $commandName,
"type" => 1,
"description" => $commandDescription,
"options" => [],
];
} else {
$commandData = [
"name" => $commandName,
"type" => 1,
"description" => $commandDescription,
"default_member_permissions" => 0,
"options" => [],
];
}
if (!empty($options)) {
for ($i = 0; $i < count($options); $i++) {
$option = [
"name" => $options[$i],
"description" => $optionDescriptions[$i],
"type" => (int)$optionTypes[$i],
"required" => ($isRequired[$i] == 'true'),
];
if (!empty($choices[$i])) {
$option["choices"] = [];
foreach ($choices[$i] as $index => $choiceName) {
if (!empty($choiceName)) {
$choice = [
"name" => $choiceName,
"value" => $choiceDescriptions[$i][$index]
];
$option["choices"][] = $choice;
}
}
}
$commandData["options"][] = $option;
}
}
$commandData = array_filter($commandData, function ($value) {
return $value !== null;
});
$jsonData = json_encode($commandData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
if ($_POST['submit'] ) {
if($deleteCommand == "0"){
$apiEndpoint = "https://discord.com/api/v10/applications/$applicationID/commands";
$headers = [
"Authorization: Bot $botToken",
"Content-Type: application/json",
];
$curlOptions = [
CURLOPT_URL => $apiEndpoint,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => $jsonData,
CURLOPT_HTTPHEADER => $headers,
];
}else{
$apiEndpoint = "https://discord.com/api/v10/applications/$applicationID/commands/$commandName";
$headers = [
"Authorization: Bot $botToken",
"Content-Type: application/json",
];
$curlOptions = [
CURLOPT_URL => $apiEndpoint,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST => 'DELETE',
CURLOPT_POSTFIELDS => $jsonData,
CURLOPT_HTTPHEADER => $headers,
];
}
$ch = curl_init();
curl_setopt_array($ch, $curlOptions);
$response = curl_exec($ch);
curl_close($ch);
$responseFromDiscord = json_decode($response);

if (isset($responseFromDiscord->id)) {
echo "
<div style='background-color: #3498db; padding: 15px; border: 1px solid #2980b9; border-radius: 5px; margin-top: 20px; color: #fff;'>
Command <b>/$commandName</b> created successfully
</div>
";
echo "<div style='background-color: #d4edda; padding: 10px; border: 1px solid #c3e6cb; margin-top: 10px; color: black;'>";
echo "<label style='color: #155724; font-weight: bold;'>Success Response from Discord:</label>";
echo "<pre style='white-space: pre-wrap; word-wrap: break-word;'>$response</pre>";
echo "</div>";
} else {
echo"
<div style='background-color: #ff4c4c; padding: 10px; border: 1px solid #ff4c4c; margin-top: 10px; color: #fff; border-radius: 5px; font-size: 14px;'>
<strong style='color: #fff;'>Warning:</strong> Failed to create <b>/$commandName</b>
</div>
";
echo "<div style='background-color: #ffdddd; padding: 10px; border: 1px solid #ff4c4c; margin-top: 10px; color: black;'>";
echo "<label style='color: #ff4c4c; font-weight: bold;'>Error Response from Discord:</label>";
echo "<pre style='white-space: pre-wrap; word-wrap: break-word;'>$response</pre>";
echo "</div>";
}
}
echo "
<div class=\"json-preview\" id=\"jsonPreview\">
Endpoint: https://discord.com/api/v10/applications/$applicationID/commands
JSON Preview:
<pre id=\"jsonContent\">$jsonData</pre>
</div>";
echo "<button type='button' onclick='history.back()' class='add-option back-button'>Go Back</button>";
exit;
}
?>
<p style="font-size:15px; width:600px;margin-left: auto;margin-right: auto;">Simple interaction with the Discord REST API for easy way to create, update or delete Slash Commands for your Discord bot <button class="read-me-button" onclick="openModal()"><i class="fa-solid fa-circle-info"></i> Read Me</button></p>

<form action="" method="post">
<label for="botToken">Bot Token</label>
<input type="text" id="botToken" name="botToken" placeholder="Remember to Reset Token" required>
<label for="applicationID">Application ID</label>
<input type="text" id="applicationID" name="applicationID" required>
<label for="commandName">Command Name</label>
<input type="text" id="commandName" name="commandName" placeholder="1-32 character name - no uppercase - no special characters" maxlength="32" required>
<label for="commandDescription">Command Description</label>
<input type="text" id="commandDescription" name="commandDescription" placeholder="1-100 character description" maxlength="100" required>
<label for="commandPermission">Default Permission</label>
<label class="dropdown-label" for="adminPermission">
<select id="adminPermission" name="adminPermission">
<option value="0">Everyone</option>
<option value="1">Administrator Permission Only</option>
</select>
</label>
<label for="deleteCommand">Delete Command</label>
<label class="dropdown-label" for="deleteCommand">
<select id="deleteCommand" name="deleteCommand">
<option value="0">No</option>
<option value="1">Yes (Put Command ID as Command Name)</option>
</select>
</label>
<h2>Command Options (Optional)</h2>
<div id="options-container"></div>
<button type="button" class="add-option" onclick="addOption()"><i class="fa-solid fa-plus"></i> Add Option</button>
<hr>
<button type="submit" value="submit" name="submit" class="send"><i class="fa-solid fa-paper-plane"></i> Create Command</button>
<button type="submit" value="createJSON" name="createJSON" class="send"><i class="fa-solid fa-paste"></i> Create JSON</button>
</form>
<div class="footer">

<a class="footer-text" href="https://theislemanager.com" target="_blank"><i class="fa-solid fa-copyright"></i> THEISLEMANAGER.COM</a> 	&nbsp;&nbsp;
<a class="footer-text" href="https://discord.com/developers/docs/interactions/application-commands" target="_blank"><i class="fa-brands fa-discord"></i>Discord Documentation</a>
</div>
<script>
  function openModal() {
document.getElementById('myModal').style.display = 'block';
}
function closeModal() {
document.getElementById('myModal').style.display = 'none';
}
let optionCounter = 0;
let choiceCounter  = 0;

function addOption() {
const optionsContainer = document.getElementById('options-container');
const optionForm = document.createElement('div');
optionForm.className = 'option-container';
optionForm.innerHTML = `
<h3>Option ${optionCounter+1}</h3>
<input type="text" name="optionName[]" placeholder="Option Name" required>
<input type="text" name="optionDescription[]" placeholder="Option Description" required>
<select name="optionType[]">
<option value="" disabled selected hidden>Option Type</option>
<option value="1">SUB_COMMAND</option>
<option value="2">SUB_COMMAND_GROUP</option>
<option value="3">STRING</option>
<option value="4">INTEGER</option>
<option value="5">BOOLEAN</option>
<option value="6">USER</option>
<option value="7">CHANNEL</option>
<option value="8">ROLE</option>
<option value="9">MENTIONABLE</option>
<option value="10">NUMBER</option>
<option value="11">ATTACHMENT</option>
</select>
<select name="isRequired[]">
<option value="" disabled selected hidden>Is Required</option>
<option value="true">Yes</option>
<option value="false">No</option>
</select>
<button type="button" class="add-choice" onclick="addChoice(${optionCounter})"><i class="fa-solid fa-plus"></i> Add Choice</button>
<div class="choices-container" id="choices-container-${optionCounter}"></div>
<button type="button" class="remove-option" onclick="removeOption(this)"><i class="fa-solid fa-xmark"></i> Remove Option</button>
`;
optionsContainer.appendChild(optionForm);
optionCounter++;
}
function addChoice(optionIndex) {
const choicesContainer = document.getElementById(`choices-container-${optionIndex}`);
const choiceForm = document.createElement('div');
choiceForm.className = 'choice-container';
choiceForm.innerHTML = `
<h4>Choice ${choiceCounter+1}</h4>
<input type="text" name="choiceName[${optionIndex}][]" placeholder="Choice Name" required>
<input type="text" name="choiceDescription[${optionIndex}][]" placeholder="Choice Value" required>
<button type="button" class="remove-choice" onclick="removeChoice(this)"><i class="fa-solid fa-xmark"></i> Remove Choice</button>
`;
choicesContainer.appendChild(choiceForm);
choiceCounter++;
}
function removeOption(button) {
const optionsContainer = document.getElementById('options-container');
optionsContainer.removeChild(button.parentElement);
optionCounter--;
}
function removeChoice(button) {
const choicesContainer = button.parentElement.parentElement;
choicesContainer.removeChild(button.parentElement);
choiceCounter--
}
</script>
</body>
</html>


