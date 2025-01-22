try {
    let result =  new 10 / 0;
    console.log("结果:" + result);
} catch (error) {
    console.eorror("错误信息:" + error.message);
}

function divide(a, b) {
    if (b === 0) {
        throw new Error("除数不能为0");
    }
    return a / b;
}

try {
    let result = divide(10, 0);
    console.log("结果:" + result);
} catch (error) {
    console.error("错误信息:" + error.message);
}

try {
    console.log("开始计算...");
    let result = 10 / 2;
    console.log("结果:" + result);
} catch (error) {
    console.error("错误信息:" + error.message);
} finally {
    console.log("结束计算");
}