class FormController {
	constructor() {
		console.log('Started');

		this.form = document.getElementById('my-form');
		if (this.form) {
			this.setup();
		}
	}

	setup() {
		this.name = document.querySelector('#name');
		this.age = document.querySelector('#age');
		
		this.form.addEventListener('submit', (event) => this.submit(event));
	}

	submit(event) {
		// event.preventDefault();
		console.log('Submit');
		
		// alert(`Hello: ${this.name.value} You are ${this.age.value} Years old.`);
	}
}

// window.addEventListener('DOMContentLoaded', () => new FormController());