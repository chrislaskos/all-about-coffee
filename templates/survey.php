<h1><?=$title?></h1>
<aside>
	<figure>
		<img src="/assets/images/espresso.jpg" alt="a cup of espresso"/>
	</figure>
</aside>
<form action="/survey" method="post">
	<fieldset>
		<legend>Personal Information</legend>
		Your Name<br/>
		<input type="text" name="name" required size="40"/>
		<br/>
		Email Address<br/>
		<input type="email" name="email" required placeholder="enter a valid email address" size="40"/>
		<br/>
	</fieldset>
	<fieldset>
		<legend>Your Coffee Preferences</legend>
		Tell us your coffee preparation methods.<br/>
		<textarea name="preparation" cols="40" rows="6"></textarea>
		<br/><br/>
		Do you grind your own beans?<br/>
		<input type="radio" name="grind" value="yes" />yes<br/>
		<input type="radio" name="grind" value="no" />no<br/>

		How do you drink your coffee?<br/>
		<input type="checkbox" name="drink" value="sugar" />with sugar<br/>
		<input type="checkbox" name="drink" value="cream" />with cream<br/>
		<br/>
		What is your favorite coffee drink?<br/>
		<select name="favorite">
		<option value="">please select a drink</option>
		<option value="drip">drip coffee</option>
		<option value="french">french press</option>
		<option value="espresso">espresso</option>
		<option value="latte">latte</option>
		<option value="flavored">flavored</option>
		</select>
	</fieldset>
	<input type="submit" value="Submit Survey"/>
</form>