function isValid(pForm) {
	const rpname = pForm.rpname.value;
	const sales= pForm.sales.value;

	if (rpname === "" || sales === "") {
		console.log("Please fill up the form properly");
       
		return false;
	}

	return true;
}
