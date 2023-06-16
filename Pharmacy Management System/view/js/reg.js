function isValid(pForm) {
	const fname = pForm.fname.value;
	const lname= pForm.lname.value;
    const dob= pForm.dob.value;
    const praddress= pForm.praddress.value;
    const pmaddress= pForm.pmaddress.value;
    const phone= pForm.phone.value;
    const email= pForm.email.value;
    const uname= pForm.uname.value;
    const pass= pForm.pass.value;
    const confirmpassword= pForm.confirmpassword.value;


	if (fname === "" || lname === ""|| dob === ""|| praddress === ""|| pmaddress === ""|| phone === ""|| email === ""|| uname === ""|| pass === ""|| confirmpassword === "") {
		console.log("Please fill up the form properly");
       
		return false;
	}

	return true;
}