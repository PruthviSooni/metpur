<!DOCTYPE html>
<html>
	<head>
	 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<title>Welcome To Forum </title>
	</head>
	<body>
	
	<!-- Simple header with scrollable tabs. -->
<!-- Simple header with fixed tabs. -->
<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Create New Topic</span>    
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Metpur</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index_1.html">Home</a>
      <a class="mdl-navigation__link" href="register_1.html">Register</a>
      
    </nav>
  </div>
  <main class="mdl-layout__content">
  <div>
  <div class="page-content" align="center">
	<form id="form1" name="form1" method="post" action="add_new_topic.php">
	<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" width="720" border="0"   >
		
		<tr>
			<td class="mdl-data-table__cell--non-numeric" ><strong>Topic</strong></td>
				<td width="0%">:</td>
				
					<td class="mdl-data-table__cell--non-numeric" width="84%">
						<div class="mdl-textfield mdl-js-textfield">
						<input class="mdl-textfield__input" name="topic" type="text" id="topic" size="50" />
						<label class="mdl-textfield__label" for="sample1">Topic...</label>
						</div>
					</td>
		</tr>
		<tr>
			<td class="mdl-data-table__cell--non-numeric" valign="top"><strong>Detail</strong></td>
				<td valign="top">:</td>
					<td class="mdl-data-table__cell--non-numeric">
					<div class="mdl-textfield mdl-js-textfield">
					<textarea class="mdl-textfield__input" name="detail" cols="50" rows="3" id="detail"></textarea>
					<label class="mdl-textfield__label" for="sample5">Detail...</label></div>
			</td>
		</tr>
		<tr>
			<td><strong>Name</strong></td>
				<td>:</td>
					<td class="mdl-data-table__cell--non-numeric">
					<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input"  name="name" type="text" id="name" size="50" />
					<label class="mdl-textfield__label" for="sample1">Name...</label></div>
					
			</td>
		</tr>
		<tr>
			<td><strong>Email</strong></td>
				<td>:</td>
					<td class="mdl-data-table__cell--non-numeric">
					<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input"  name="text" type="text" id="email" size="50" />
					<label class="mdl-textfield__label" for="sample1">Email...</label></div>
			</td>	
		</tr>
		<tr cellpadding="20">
			<td>&nbsp;</td>
				<td>&nbsp;</td>
					<td class="mdl-data-table__cell--non-numeric">
					<div class="mdl-textfield mdl-js-textfield">
					
					<td><input class="mdl-button mdl-js-button mdl-button--raised" type="submit" name="Submit" value="Submit" /> </td>
					<td><input class="mdl-button mdl-js-button mdl-button--raised" type="reset" name="Submit2" value="Reset" /></td>
					</div>
				</td>
		</tr>
		</table>
		</td>
	</form>
 
   
	<!-- Your content goes here --></div>
  </main>
</div>
</div>
	</tr>
	</table>
	</body>
	</html>
	 