// 0122hanaのjs練習

let person = {
    name: "hana",
    age: 20,
    gender: "female",
    greet: function () {
        console.log("hello");
    }
}

console.log(person.name);
person.greet();

function Human(name, age,) {
    this.name = name;
    this.age = age;
}
console.log(typeof Human);

let student = new Human("hana", 20);
console.log(typeof student); // object
console.log(student.name); // hana

// 类与继承
class Animal {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    speak() {
        console.log(this.name + ' says meow');
    }

    run() {
        console.log(this.name + ' is running.');
    }
}

let cat = new Animal('cat');
cat.speak(); // cat says meow
cat.run(); // cat is running.

// 继承
class Dog extends Animal {
    constructor(name) {
        super(name);
    }
    speak() {
        console.log(this.name + ' says woof');
    }
}

let dog = new Dog('dog');
dog.speak(); // dog says woof

// 异步操作
function fetchData(callback) {
    setTimeout(function () {
        console.log('data fetched!');
    }, 2000); // 2秒后执行
}

fetchData((data) => {
    console.log(data);
})

let promise = new Promise((resolve, reject) => {
    let success = true;
    if (success) {
        resolve('data fetched!');
    } else {
        reject('error');
    }
})

promise.then((message) => {
    console.log("success" + message);
}).catch((message) => {
    console.log("error" + message);
})

function fetchData() {
    return new Promise((resolve) => {
        setTimeout(function () {
            console.log('data fetched!');
            resolve('data fetched!');
        }, 2000); // 2秒后执行
    })
}

async function fetchDataAsync() {
    console.log("Fetching data...");
    let data = await fetchData();
    console.log(data);
}

fetchDataAsync();