const setClock = () => {
	const today = new Date()

    const {hours, minutes, seconds, period} = formatTime(today);

    document.querySelector(".hours").textContent = hours;
    document.querySelector(".minutes").textContent = minutes;
    document.querySelector(".seconds").textContent = seconds;
    document.querySelector(".period").textContent = period;

    document.querySelector(".date").textContent = formatDate(today);
};

const formatTime = (todayDate) =>{
    var namaUser = "Admin";
	let hours = todayDate.getHours();
	let minutes = todayDate.getMinutes();
	let seconds = todayDate.getSeconds();

    // Pad single-digit hours, minutes, and seconds with leading zero
    hours = hours.toString().padStart(2, '0');
    minutes = minutes.toString().padStart(2, '0');
    seconds = seconds.toString().padStart(2, '0');


	let period = hours >= 12 ? "PM" : "AM";

	hours = hours > 12 ? hours % 12 : hours;



    return {hours, minutes, seconds, period}


};

const formatDate = (todayDate) => {
    const date = todayDate.getDate();
    const year = todayDate.getFullYear();
    const day = todayDate.toLocaleString("default", {weekday: "long"});
    const month = todayDate.toLocaleString("default", { month: "long"});

    return `${day}, ${date} ${month} ${year}`
};

setClock();
setInterval(setClock, 1000);

