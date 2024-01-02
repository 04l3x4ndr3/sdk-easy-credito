<!DOCTYPE html>

<html lang="pt">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Signup</title>
</head>
<body>
<h1>Cadastro</h1>
<p>Por favor, insira seus dados</p>
<p style="background-color: red; color:white">Atenção, os dados enviados não podem ser alterados. Favor, preencher com
    atenção e verificar antes de enviar!</p>
<p style="font-size: large; display: none" id="id">ID: </p>
<form>
    <div>
        <div>
            <label>Nome</label>
            <input type="text" name="name" id="name"/>
        </div>
        <div>
            <label>CPF</label>
            <input type="text" name="taxNumber" id="taxNumber" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"/>
        </div>
        <div>
            <label>E-mail</label>
            <input type="email" name="email" id="email"/>
        </div>
        <div>
            <label>Data de Nascimento</label>
            <input type="date" name="birthdate" id="birthdate"/>
        </div>
        <div>
            <label>Número de Telefone</label>
            <input type="tel" name="phone" id="phone" minlength="11" maxlength="11"/>
        </div>
        <div>
            <label>CEP</label>
            <input type="text" name="zipCode" id="zipCode" maxlength="8"/>
        </div>
    </div>
    <input value="Cadastrar" type="button" onclick="signup()">
</form>
</body>
<script>
    const checkboxSimpleSignup = $("#simpleSingup");
    const divSignupMatch = $("#signupMatch");
    let FIPE = [];

    $(document).ready(function (e) {
        fetchEducation();
        fetchBanks();
        fetchOccupation();
        fetchFIPE();
        fetchRealEstate();
        fetchWorking();
    })

    async function fetchWorking() {
        let data = [];
        await fetch("./api/Enum/GetAccountType.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#ACCOUNTY_TYPE_WORKING_CAPITAL").append(element);
        })

        await fetch("./api/Enum/GetWorkingLoanObjectives.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#LOAN_OBJECTIVES_WORKING_CAPITAL").append(element);
        })

        await fetch("./api/Enum/GetEmployeesCount.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#EMPLOYEES_COUNT_WORKING_CAPITAL").append(element);
        })

        await fetch("./api/Enum/GetBusinessProfession.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#BUSINESS_OCCUPATION_WORKING_CAPITAL").append(element);
        })
    }

    async function fetchRealEstate() {
        let data = [];
        await fetch("./api/Enum/GetRealEstateType.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#REAL_ESTATE_TYPE_REFINANCING_HOME").append(element);
        })
    }

    async function fetchEducation() {
        let data = [];
        await fetch("./api/Enum/GetEducation.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"]}">${value["value"]}</option>
            `;
            $("#education").append(element);
        })
    }

    async function fetchBanks() {
        let data = [];
        await fetch("./api/Enum/GetBank.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"].replace("_", "")}">${value["value"]}</option>
            `;
            $("#bank").append(element);
            $("#BANK_WORKING_CAPITAL").append(element);
        })
    }

    async function fetchOccupation() {
        let data = [];
        await fetch("./api/Enum/GetOccupation.php").then(data => data.json()).then(response => {
            data = response;
        });
        data.forEach(value => {
            let element = `
                <option value="${value["key"].replace("_", "")}">${value["value"]}</option>
            `;
            $("#occupation").append(element);
        })
    }

    async function fetchFIPE() {
        let data = [];
        let vehicleBrand = [], vehicleModel = [], vehicleYear = [];
        await fetch("./api/Enum/GetFIPE.php").then(data => data.json()).then(response => {
            data = response.vehicles;
            FIPE = data;
        });
        data.forEach(value => {
            if (!vehicleYear.includes(value.vehicleYear)) {
                vehicleYear.push(value.vehicleYear)
            }
            if (!vehicleBrand.includes(value.vehicleBrand)) {
                let element = `
                    <option value="${value.vehicleBrand}">${value.vehicleBrand}</option>
                `;
                $("#BRAND_FINANCING_AUTO").append(element)
                $("#BRAND_REFINANCING_AUTO").append(element)
                vehicleBrand.push(value.vehicleBrand)
            }
            if (!vehicleModel.includes(value.vehicleModel)) {
                let element = `
                    <option value="${value.vehicleModel}">${value.vehicleModel}</option>
                `;
                $("#MODEL_FINANCING_AUTO").append(element)
                $("#MODEL_REFINANCING_AUTO").append(element)
                vehicleModel.push(value.vehicleModel)
            }
        })
        vehicleYear.sort();
        vehicleYear.forEach(value => {
            let element = `
                    <option value="${value}">${value}</option>
                `;
            $("#YEAR_FINANCING_AUTO").append(element)
            $("#YEAR_REFINANCING_AUTO").append(element)
        })
    }

    checkboxSimpleSignup.on("change", function (e) {
        divSignupMatch.css("display") === "none" ? divSignupMatch.show() : divSignupMatch.hide();
    })
    $("[name='products']").on("click", function (e) {
        const target = $(`#DIV_${e.target.id}`);
        if (target && target.css("display") === "none") {
            target.show();
        } else {
            target.hide();
        }
    });

    class Client {
        id;
        taxNumber;
        name;
        email;
        birthdate;
        phone;
        zipCode;
        hasCreditCard;
        hasRestriction;
        hasOwnHouse;
        hasVehicle;
        hasAndroid;
        simpleSingup;
        education;
        bank;
        occupation;
        income;
        products;
        status;
        dateCreated;
        $lastUpdated;

        constructor() {
            this.id = null;
            this.products = [];
            this.dateCreated = new Date();
            this.lastUpdated = new Date();
            this.simpleSingup = true;
        }
    }

    class Product {
        typestring;

        constructor(typestring) {
            this.typestring = typestring;
        }
    }

    class Card extends Product {
        network;
        payday;

        constructor(network, payday) {
            super("CARD");
            this.network = network;
            this.payday = payday;
        }
    }

    class Loan extends Product {
        value;
        installments;

        constructor(value, installments) {
            super("LOAN");
            this.value = value;
            this.installments = installments;
        }
    }

    class RefinancingAuto extends Product {
        value;
        installments;
        vehicleBrand;
        vehicleModel;
        vehicleYear;
        vehicleFIPECode;
        vehicleFIPEValue;

        constructor(value, installments, vehicleBrand, vehicleModel, vehicleYear, vehicleFIPECode, vehicleFIPEValue) {
            super("REFINANCING_AUTO");
            this.value = value;
            this.installments = installments;
            this.vehicleBrand = vehicleBrand;
            this.vehicleModel = vehicleModel;
            this.vehicleYear = vehicleYear;
            this.vehicleFIPECode = vehicleFIPECode;
            this.vehicleFIPEValue = vehicleFIPEValue;
        }
    }

    class FinancingAuto extends RefinancingAuto {
        downPayment;
        used;

        constructor(value, installments, vehicleBrand, vehicleModel, vehicleYear, vehicleFIPECode, vehicleFIPEValue, downPayment, used) {
            super(value, installments, vehicleBrand, vehicleModel, vehicleYear, vehicleFIPECode, vehicleFIPEValue);
            this.value = value;
            this.installments = installments;
            this.typestring = "FINANCING_AUTO";
        }
    }

    class RefinancingHome extends Product {
        value;
        installments;
        realEstateType;
        realEstateValue;
        outstandingValue;

        constructor(value, installments, realEstateType, realEstateValue, outstandingValue) {
            super("REFINANCING_HOME");
            this.value = value;
            this.installments = installments;
            this.realEstateType = realEstateType;
            this.realEstateValue = realEstateValue;
            this.outstandingValue = outstandingValue;
        }
    }

    class WorkingCapital extends Product {
        value;
        installments;
        cpnj;
        businessProfession;
        employeesCount;
        businessIncomeCpnj;
        loanObjectives;
        bank;
        accountType;
        agency;
        account;

        constructor(
            value,
            installments,
            cpnj,
            businessProfession,
            employeesCount,
            businessIncomeCpnj,
            loanObjectives,
            bank,
            accountType,
            agency,
            account
        ) {
            super("WORKING_CAPITAL");
            this.value = value;
            this.installments = installments;
            this.cpnj = cpnj;
            this.businessProfession = businessProfession;
            this.employeesCount = employeesCount;
            this.businessIncomeCpnj = businessIncomeCpnj;
            this.oanObjectives = loanObjectives;
            this.bank = bank;
            this.accountType = accountType;
            this.agency = agency;
            this.account = account;
        }
    }

    function signup() {
        try {
            let client = {
                name: document.getElementById("name").value,
                taxNumber: document.getElementById("taxNumber").value,
                email: document.getElementById("email").value,
                birthdate: document.getElementById("birthdate").value,
                phone: document.getElementById("phone").value,
                zipCode: document.getElementById("zipCode").value
            };

            $.ajax("./api/Signup.php", {
                type: "POST",
                data: client,
                success: function (data) {
                    if (data.toString().toLowerCase().includes("error")) {
                        throw new Error(data);
                    }
                    data = JSON.parse(data)
                    $("#id").text(`ID: ${data.id}`)
                    sessionStorage.setItem("id", data.id)
                    localStorage.setItem("id", data.id);
                    localStorage.setItem("proposals", JSON.stringify(data));
                    window.location.href = "http://localhost:8080/profile.php";
                }
            })
        } catch (e) {
            alert(e.message);
            console.error(e)
        }
    }
</script>
</html>