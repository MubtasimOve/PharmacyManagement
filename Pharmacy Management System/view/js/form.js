function isValid(pForm) {
	const mediname = pForm.mediname.value;
	const expdate= pForm.expdate.value;

	if (mediname === "" || expdate === "") {
		console.log("Please fill up the form properly");
       
		return false;
	}

	return true;
}
