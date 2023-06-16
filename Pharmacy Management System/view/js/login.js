function isValid(pForm) {
	const uname = pForm.uname.value;
	const pass= pForm.pass.value;

	if (uname === "" || pass === "") {
		console.log("Please fill up the form properly");
       
		return false;
	}

	return true;
}
