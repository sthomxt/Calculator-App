let clr = false;

function calculate(oper_next) {

    let num1 = document.getElementById("digits").value;
    let num2 = document.getElementById("disp").innerHTML;
    let oper = document.getElementById("opers").value;

    // exit if no input
    if (num1 == '') { return false; }

    // take stored and entered values passing them to PHP for calculation
    let args = 'num1=' + num1 + '&num2=' + num2 + '&oper=' + oper;
    let url = 'calc.php';

    let res;
    let xhttp = new XMLHttpRequest();

    // pure Ajax handler 
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            res = this.response;
            document.getElementById("disp").innerHTML = res;
            clr = true;
            // return answer or clear calc on error
            if (res.indexOf('Error')!=-1 || oper_next == 'calculate') {
                clearMem();
                return true;
            } else {
                // update front end display and internal memory
                document.getElementById("digits").value = res;
                document.getElementById("opers").value = oper_next;
                return true;
            }
        } else {
            return false;
        }
    };
    xhttp.open('POST', url, true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send(args);
    return false;
}

// function to clear calculator internal memory and display after calculation
function clearCalc(entry) {
    document.getElementById("disp").innerHTML = '';
    if (!entry) {
        document.getElementById("digits").value = '';
        document.getElementById("opers").value = '';
    }
}

// function to clear display, leaving internal memory intact
function clearDisplay() {
    document.getElementById("disp").innerHTML = '';
}

// function to clear internal memory, leaving display intact
function clearMem() {
    document.getElementById("digits").value = '';
    document.getElementById("opers").value = '';
}

// function stores calculator data and processes any calculations 
function storeCalcs(oper) {
    let disp = document.getElementById("disp");
    let digits = document.getElementById("digits");
    let opers = document.getElementById("opers");
    
    if (disp.innerHTML == '') { return false; }
    if (digits.value == '') {
        digits.value = disp.innerHTML;
        opers.value = oper;
        clr = true;
    } else {
        calculate(oper);
    }
}

// function to handle and display number clicks
function numClick(elem) {
    let disp = document.getElementById("disp");
    // clear display if flag set
    if (clr) { disp.innerHTML = ''; clr = false; }
    dispText = disp.innerHTML;
    if (dispText.length < 20) {
        // update display, allow only one decimal
        if (elem.value == '.' &&  dispText.indexOf('.') != -1 ) { return; }
        disp.innerHTML = dispText + elem.value;
    }
}

// function to handle calculator operations
function funcClick(elem) {
    // retrieve value of clicked function
    let val = elem.value;
    let digits = document.getElementById("digits");
    let disp = document.getElementById("disp");
    switch(val) {
        case 'ac':
            clearDisplay();
            clearMem();
            break;
        case 'ce':
            clearDisplay();
            break;
        case '-':
            if (digits.value == '' && disp.innerHTML == '') { numClick(elem) }
            else { storeCalcs('sub'); }
            break;
        case 'calculate':
            calculate(val);
            break;
        default:
            storeCalcs(val);
    }
}
