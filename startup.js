const IDs = {
	replikaLogo: ["replika-logo", 1000],
	replikaOS: ["replika-os", 1300],
	replikaStart: ["replika-start", 750],
	replikaID: ["replika-id", 400],
	replikaTest: ["replika-test", 100],
	replikaInfo: ["replika-info", 2000],
};

Object.values(IDs).forEach((id) => {
	const element = document.getElementById(id[0]);
	if (element) element.style.display = "none";
});

function sleep(ms) {
	return new Promise((resolve) => setTimeout(resolve, ms));
}

async function BootSequence() {
	for (const id of Object.values(IDs)) {
		const element = document.getElementById(id[0]);
		if (element) {
			await sleep(id[1]);
			element.style.display = "";
		}
	}
}

BootSequence();
