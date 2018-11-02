export function login(url,credentials){
	return new Promise((res, rej) => {
		axios.post(url, credentials)
		.then((response) => {
			res(response.data)
			console.log(response.data)
		})
		.catch((err) => {
			rej("Wrong email or password")
		})
	})
}

export function signup(url,credentials){
	return new Promise((res, rej) => {
		axios.post(url, credentials)
		.then((response) => {
			res(response.data)
			console.log(response.data)
		})
		.catch((err) => {
			console.log(err)
			rej("An account already exists with this email or Username")
		})
	})
}

export function activateAccount(url, credentials){
	return new Promise((res, rej) => {
		axios.post(url, credentials)
		.then((response) => {
			res(response.data)
			console.log(response.data)
		})
		.catch((err) => {
			console.log(err)
			rej("Something went wrong...")
		})
	})
}

export function resetPassword(url,credentials){
	return new Promise((res, rej) => {
		axios.post(url, credentials)
		.then((response) => {
			res(response.data)
			console.log(response.data)
		})
		.catch((err) => {
			rej("Wrong email or password")
		})
	})
}

export function getLocalUser(){
	const usrStr = localStorage.getItem('user')

	if(!usrStr){
		return null;
	}

	return JSON.parse(usrStr);
}
