const powA = document.getElementById("powA");
const biggestA = document.getElementById("biggestA");
const lowwestA = document.getElementById("lowwestA");
const plurA = document.getElementById("plurA");
const fibA = document.getElementById("fibA");

const pow = document.getElementById("pow");
const biggest = document.getElementById("biggest");
const lowwest = document.getElementById("lowwest");
const plur = document.getElementById("plur");
const fib = document.getElementById("fib");

function pows() {
    let nums = pow.value.split(" ");
    let answer = nums[0];

    for (let i = 1; i < nums[1]; i++) {
        answer *= nums[0];
    }

    powA.innerText = answer;
}

function lowwestf() {
    let num = lowwest.value;
    let min = Math.min(...num.split(''));
    lowwestA.innerText = min;
}

function biggestf() {
    let arguments = biggest.value.split(" ");
    while (arguments[1] !== 0) {
        let temp = arguments[1];
        arguments[1] = arguments[0] % arguments[1];
        arguments[0] = temp;
        console.log(temp);
      }
    biggestA.innerText = arguments[0];
}
 function plurf() {
    let num = plur.value;
    let answer;
    if (num % 10 == 1 && num % 100 != 11) {
        answer = `В резльтате выполнения запроса была найдена ${num} запись`;
    }
    else if ((num % 10 == 2 || num % 10 == 3 || num % 10 == 4) &&
    (num % 100 != 12 || num % 100 != 13 || num % 100 != 14)) {
        answer = `В резльтате выполнения запроса было найдено ${num} записи`;
    }
    else if (num % 10 == 0 || num % 10 == 5 || num % 10 == 6 || num % 10 == 7 || num % 10 == 8 || num % 10 == 9 ||
        num % 100 == 11 || num % 100 == 12 || num % 100 == 13 || num % 100 == 14) {
            answer = `В резльтате выполнения запроса было найдено ${num} записей`;
        }
    plurA.innerText = answer;
 }

 function fibf() {
    let n = fib.value;
    let a = 1;
    let b = 1;
    for (let i = 3; i <= n; i++) {
        let c = a + b;
        a = b;
        b = c;
    }
    fibA.innerText = b;
 }