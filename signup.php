<!DOCTYPE html>

<html lang="pt">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Signup</title>
</head>
<body>
<h1>Cadastro</h1>
<p>Por favor, insira seus dados</p>
<p style="background-color: red; color:white">Atenção, os dados enviados não podem ser alterados. Favor, preencher com atenção e verificar antes de enviar!</p>
<p style="font-size: large" id="id">ID: </p>
<form>
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
    <div>
        <label>Possui algum cartão de crédito no seu nome?</label>
        <input type="checkbox" name="hasCreditCard" id="hasCreditCard"/>
    </div>
    <div>
        <label>Possui alguma restrição de crédito?</label>
        <input type="checkbox" name="hasRestriction" id="hasRestriction"/>
    </div>
    <div>
        <label>Possui casa própria?</label>
        <input type="checkbox" name="hasOwnHouse" id="hasOwnHouse"/>
    </div>
    <div>
        <label>Possui veículo?</label>
        <input type="checkbox" name="hasVehicle" id="hasVehicle"/>
    </div>
    <div>
        <label>Possui algum celular com sistema Android?</label>
        <input type="checkbox" id="hasAndroid"/>
    </div>
    <div>
        <h2>Deseja fazer o Cadastro Match?</h2>
        <h3>Cadastro Match é cadastro personalizado que propõe produtos e serviços customizados analizados por uma
            inteligência artificial conforme os dados cedidos.</h3>
        <label>Optar Pelo Cadastro Match</label>
        <input type="checkbox" id="simpleSingup">
    </div>
    <div style="display: none" id="signupMatch">
        <div>
            <label>Escolaridade</label>
            <select id="education">
            </select>
        </div>
        <div>
            <label>Banco Pessoal</label>
            <select id="bank">
            </select>
        </div>
        <div>
            <label>Ocupação</label>
            <select id="occupation">
            </select>
        </div>
        <div>
            <label>Renda Mensal</label>
            <input type="number" id="income">
        </div>
        <div>
            <div>
                <h4>Selecione os produtos procurados</h4>
                <label>Débito</label>
                <input type="checkbox" id="DEBT" name="products"><br />

                <label>Cartão de Crédito</label>
                <input type="checkbox" id="CARD" name="products"><br />

                <label>Empréstimos</label>
                <input type="checkbox" id="LOAN" name="products"><br />

                <label>Financiamento de Veículos</label>
                <input type="checkbox" id="FINANCING_AUTO" name="products"><br />

                <label>Refinanciamento de Veículos</label>
                <input type="checkbox" id="REFINANCING_AUTO" name="products"><br />

                <label>Refinanciamento de Imóveis</label>
                <input type="checkbox" id="REFINANCING_HOME" name="products"><br />

                <label>Capital de Giro</label>
                <input type="checkbox" id="WORKING_CAPITAL" name="products"><br />
            </div>
            <div id="DIV_CARD" style="display:none;">
                <h5>Cartão de Crédito</h5>
                <div>
                    <label>Bandeira</label>
                    <select id="NETWORK_CARD">
                        <option value="ELO">ELO</option>
                        <option value="MASTERCARD">MasterCard</option>
                        <option value="VISA">Visa</option>
                    </select>
                    <label>Dia de Pagamento</label>
                    <input type="number" id="PAYDAY_CARD">
                </div>
            </div>
            <div id="DIV_LOAN" style="display:none;">
                <h5>Empréstimos</h5>
                <div>
                    <label>Valor</label>
                    <input type="number" id="VALUE_LOAN">
                </div>
                <div>
                    <label>Número de Parcelas</label>
                    <input type="number" id="INSTALLMENTS_LOAN">
                </div>
            </div>
            <div id="DIV_FINANCING_AUTO" style="display:none;">
                <h5>Financiamento de Veículos</h5>
                <div>
                    <label>Valor</label>
                    <input type="number" id="VALUE_FINANCING_AUTO">
                </div>
                <div>
                    <label>Número de Parcelas</label>
                    <input type="number" id="INSTALLMENTS_FINANCING_AUTO">
                </div>
                <div>
                    <h6>Veículo</h6>
                    <div>
                        <label>Marca</label>
                        <select id="BRAND_FINANCING_AUTO">
                        </select>
                        <label>Modelo</label>
                        <select id="MODEL_FINANCING_AUTO">
                        </select>
                        <label>Código FIPE</label>
                        <input type="text" id="FIPE_CODE_FINANCING_AUTO">

                        <label>Valor</label>
                        <input type="number" id="FIPE_VALUE_FINANCING_AUTO">

                        <label>Ano</label>
                        <select id="YEAR_FINANCING_AUTO">
                        </select>
                    </div>

                    <label>Entrada</label>
                    <input type="number" id="DOWNPAYMENT_FINANCING_AUTO">

                    <label>Carro Usado?</label>
                    <input type="checkbox" id="USED_FINANCING_AUTO">
                </div>
            </div>
            <div id="DIV_REFINANCING_AUTO" style="display:none;">
                <h5>Refinanciamento de Veículos</h5>
                <div>
                    <label>Valor</label>
                    <input type="number" id="VALUE_REFINANCING_AUTO">
                </div>
                <div>
                    <label>Número de Parcelas</label>
                    <input type="number" id="INSTALLMENTS_REFINANCING_AUTO">
                </div>
                <div>
                    <h6>Veículo</h6>
                    <div>
                        <label>Marca</label>
                        <select id="BRAND_REFINANCING_AUTO">
                        </select>
                        <label>Modelo</label>
                        <select id="MODEL_REFINANCING_AUTO">
                        </select>
                        <label>Código FIPE</label>
                        <input type="text" id="FIPE_CODE_REFINANCING_AUTO">

                        <label>Valor</label>
                        <input type="number" id="FIPE_VALUE_REFINANCING_AUTO">

                        <label>Ano</label>
                        <select id="YEAR_REFINANCING_AUTO">
                        </select>
                    </div>
                </div>
            </div>
            <div id="DIV_REFINANCING_HOME" style="display:none;">
                <h5>Refinanciamento de Imóveis</h5>
                <div>
                    <label>Valor</label>
                    <input type="number" id="VALUE_REFINANCING_HOME">
                </div>
                <div>
                    <label>Número de Parcelas</label>
                    <input type="number" id="INSTALLMENTS_REFINANCING_HOME">
                </div>
                <div>
                    <h6>Imóvel</h6>
                    <div>
                        <label>Tipo</label>
                        <select id="REAL_ESTATE_TYPE_REFINANCING_HOME">
                        </select>

                        <label>Valor Avaliado</label>
                        <input type="number" id="REAL_ESTATE_VALUE_REFINANCING_HOME">

                        <label>Saldo Devedor</label>
                        <input type="number" id="OUTSTANDING_VALUE_REFINANCING_HOME">
                    </div>
                </div>
            </div>
            <div id="DIV_WORKING_CAPITAL" style="display:none;">
                <h5>Capital de Giro</h5>
                <div>
                    <label>Valor</label>
                    <input type="number" id="VALUE_WORKING_CAPITAL">
                </div>
                <div>
                    <label>Número de Parcelas</label>
                    <input type="number" id="INSTALLMENTS_WORKING_CAPITAL">
                </div>
                <div>
                    <h6>Empresa</h6>
                    <div>
                        <label>CNPJ</label>
                        <input type="text" id="TAXNUMBER_WORKING_CAPITAL" maxlength="14" pattern="[0-9]{2}[0-9]{3}[0-9]{3}[0-9]{4}[0-9]{2}">
                    </div>
                    <div>
                        <label>Cargo na Empresa</label>
                        <select id="BUSINESS_OCCUPATION_WORKING_CAPITAL">

                        </select>
                    </div>
                    <div>
                        <label>Número de Colaboradores</label>
                        <select id="EMPLOYEES_COUNT_WORKING_CAPITAL">

                        </select>
                    </div>
                    <div>
                        <label>Receita Mensal</label>
                        <input type="number" id="INCOME_WORKING_CAPITAL">
                    </div>
                    <div>
                        <label>Objetivo do Empréstimo</label>
                        <select id="LOAN_OBJECTIVES_WORKING_CAPITAL">
                        </select>
                    </div>
                    <div>
                        <h6>Dados Bancários</h6>
                        <div>
                            <label>Banco</label>
                            <select id="BANK_WORKING_CAPITAL">

                            </select>
                        </div>
                        <div>
                            <label>Tipo de Conta</label>
                            <select id="ACCOUNTY_TYPE_WORKING_CAPITAL">

                            </select>
                        </div>
                        <div>
                            <label>Agência</label>
                            <input type="number" id="AGENCY_WORKING_CAPITAL">
                        </div>
                        <div>
                            <label>Número da Conta</label>
                            <input type="text" id="ACCOUNT_NUMBER_WORKING_CAPITAL">
                        </div>
                    </div>
                </div>
            </div>
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
            if(!vehicleYear.includes(value.vehicleYear)) {
                vehicleYear.push(value.vehicleYear)
            }
            if(!vehicleBrand.includes(value.vehicleBrand)) {
                let element = `
                    <option value="${value.vehicleBrand}">${value.vehicleBrand}</option>
                `;
                $("#BRAND_FINANCING_AUTO").append(element)
                $("#BRAND_REFINANCING_AUTO").append(element)
                vehicleBrand.push(value.vehicleBrand)
            }
            if(!vehicleModel.includes(value.vehicleModel)) {
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
        let client = new Client();
        client.name = document.getElementById("name").value;
        client.taxNumber = document.getElementById("taxNumber").value;
        client.email = document.getElementById("email").value;
        client.birthdate = document.getElementById("birthdate").value;
        client.phone = document.getElementById("phone").value;
        client.zipCode = document.getElementById("zipCode").value;
        client.hasCreditCard = !!document.getElementById("hasCreditCard").getAttribute("checked");
        client.hasRestriction = !!document.getElementById("hasRestriction").getAttribute("checked");
        client.hasOwnHouse = !!document.getElementById("hasOwnHouse").getAttribute("checked");
        client.hasVehicle = !!document.getElementById("hasVehicle").getAttribute("checked");
        client.hasAndroid = !!document.getElementById("hasAndroid").getAttribute("checked");
        client.simpleSingup = !(!!document.getElementById("simpleSingup").getAttribute("checked"));
        client.education = document.getElementById("education").value;
        client.bank = document.getElementById("bank").value;
        client.occupation = document.getElementById("occupation").value;
        client.income = document.getElementById("income").value;

        for (const pro of document.getElementsByName("products")) {
            if (pro.checked) {
                let product = new Product(pro.id);
                switch (pro.id) {
                    case "CARD":
                        product = new Loan(
                            $("#NETWORK_CARD").val(),
                            $("#PAYDAY_CARD").val()
                        )
                        break;
                    case "LOAN":
                        product = new Loan(
                            $("#VALUE_LOAN").val(),
                            $("#INSTALLMENTS_LOAN").val()
                    )
                        break;
                    case "FINANCING_AUTO":
                        product = new FinancingAuto(
                            $("#VALUE_FINANCING_AUTO").val(),
                            $("#INSTALLMENTS_FINANCING_AUTO").val(),
                            $("#BRAND_FINANCING_AUTO").val(),
                            $("#MODEL_FINANCING_AUTO").val(),
                            $("#YEAR_FINANCING_AUTO").val(),
                            $("#FIPE_CODE_FINANCING_AUTO").val(),
                            $("#FIPE_VALUE_FINANCING_AUTO").val(),
                            $("#DOWNPAYMENT_FINANCING_AUTO").val(),
                            !!$("#USED_FINANCING_AUTO").attr("checked")
                        );
                        break;
                    case "REFINANCING_AUTO":
                        product = new RefinancingAuto(
                            $("#VALUE_REFINANCING_AUTO").val(),
                            $("#INSTALLMENTS_REFINANCING_AUTO").val(),
                            $("#BRAND_REFINANCING_AUTO").val(),
                            $("#MODEL_REFINANCING_AUTO").val(),
                            $("#YEAR_REFINANCING_AUTO").val(),
                            $("#FIPE_CODE_REFINANCING_AUTO").val(),
                            $("#FIPE_VALUE_REFINANCING_AUTO").val()
                        );
                        break;
                    case "REFINANCING_HOME":
                        product = new RefinancingHome(
                            $("#VALUE_REFINANCING_HOME").val(),
                            $("#INSTALLMENTS_REFINANCING_HOME").val(),
                            $("#REAL_ESTATE_TYPE_REFINANCING_HOME").val(),
                            $("#REAL_ESTATE_VALUE_REFINANCING_HOME").val(),
                            $("#OUTSTANDING_VALUE_REFINANCING_HOME").val()
                        );
                        break;
                    case "WORKING_CAPITAL":
                        product = new WorkingCapital(
                            $("#VALUE_WORKING_CAPITAL").val(),
                            $("#INSTALLMENTS_WORKING_CAPITAL").val(),
                            $("#TAXNUMBER_WORKING_CAPITAL").val(),
                            $("#BUSINESS_OCCUPATION_WORKING_CAPITAL").val(),
                            $("#EMPLOYEES_COUNT_WORKING_CAPITAL").val(),
                            $("#INCOME_WORKING_CAPITAL").val(),
                            $("#LOAN_OBJECTIVES_WORKING_CAPITAL").val(),
                            $("#BANK_WORKING_CAPITAL").val(),
                            $("#ACCOUNTY_TYPE_WORKING_CAPITAL").val(),
                            $("#AGENCY_WORKING_CAPITAL").val(),
                            $("#ACCOUNT_NUMBER_WORKING_CAPITAL").val(),
                        );
                        break;
                }
                client.products.push(product);
            }
        }
        try {
            $.ajax("./api/Signup.php", {
                type: "POST",
                data: client,
                success: function (data) {
                    if(data.toString().toLowerCase().includes("exception")) {
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
            console.error(e)
        }
    }
</script>
</html>