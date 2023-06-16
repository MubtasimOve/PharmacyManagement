function isValid(pForm) {
	const mediname = pForm.mediname.value;
	const quantity= pForm.quantity.value;
    const unitePrice= pForm.unitePrice.value;
    const totalAmount= pForm.totalAmount.value;
    
   


	if (mediname === "" || quantity === ""|| unitePrice === ""|| totalAmount === "") {
		console.log("Please fill up the form properly");
       
		return false;
	}

	return true;
}