const fetch_init = async (data) => {
	let response = await fetch(admin_url.ajaxurl, {
		method: "POST",
		body: data,
		credentials: "same-origin",
	});

	if (!response.ok) throw new Error('Ajax failed');
	const jsonRes = await response.json();

	return jsonRes;
};

export default fetch_init;
