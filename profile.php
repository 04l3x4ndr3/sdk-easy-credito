<!DOCTYPE html>

<html lang="pt">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Signup</title>
</head>
<body>
<h1>Conta</h1>
<p>Por favor, insira seus dados</p>
<p style="background-color: red; color:white">Atenção, os dados enviados não podem ser alterados. Favor, preencher com atenção e verificar antes de enviar!</p>
<p style="font-size: large" id="id">ID: </p>
<p>Status <span id="status"></span></p>
<p>Lembrando que só pode haver no máximo 50 requisições por hora do mesmo id!</p>
<div>
    Documentos Pessoais
    <label for="documentType">Tipo de Documento</label>
    <select id="documentType">
        <option value="SELF">Foto Frontal</option>
    </select>
    <input type="file" id="documentFile" class="contract" />
    <button onclick="sendDocument()">Enviar documentos para essa Proposta</button>
</div>
<p>
    IDs das propostas (customerServiceNumber)
    <div id="customerServiceNumber">
        <div>
            <span>Proposta com ID tal</span>
            <div>
                Contratação
                <button onclick="getContract()">Receber contrato dessa proposta</button>
                <input type="file" class="contract" />
                <button onclick="signContract()">Assinar Contrato</button>
            </div>
        </div>
    </div>
</p>
<button onclick="refreshStatus()">Atualizar Status</button>
<button onclick="createPoposals()" id="BUTTON_PROPOSALS">Ver Propostas e Serviços</button>
<div id="DIV_PROPOSALS" style="display: none">
    <div>
        <h2>Propostas Personalizadas</h2>
        <h3>Contrate quantas propostas você quiser, basta preenchê-las com os valore que você deseja!</h3>
    </div>
    <div>
        <div id="DIV_PERSONAL">
            <div>
                <label for="mother">Nome da Mãe</label>
                <input type="text" id="mother" />
            </div>
            <div>
                <label for="gender">Sexo</label>
                <select id="gender">
                    <option value="MASCULINO">Masculino</option>
                    <option value="FEMININO">Feminino</option>
                </select>
            </div>
            <div>
                <label for="nationality">Nacionaldade</label>
                <select id="nationality">
                    <option value="BRASILEIRO">Brasileiro</option>
                    <option value="ESTRANGEIRO">Estrangeiro</option>
                </select>
            </div>
            <div>
                <label for="hometownState">Estado de Nascimento</label>
                <select id="hometownState">
                    <option value="ES">ES</option>
                </select>
            </div>
            <div>
                <label for="hometown">Cidade de Nascimento</label>
                <input type="text" id="hometown" />
            </div>
            <div>
                <label for="education">Escolaridade</label>
                <select id="education">
                    <option value="POS_GRADUACAO">Pós Graduação</option>
                </select>
            </div>
            <div>
                <label for="relationshipStatus">Estado Civil</label>
                <select id="relationshipStatus">
                    <option value="CASADO">Casado</option>
                </select>
            </div>
            <div>
                <label for="phoneLandline">Telefone Fixo</label>
                <input type="text" id="phoneLandline" minlength="10" maxlength="10" />
            </div>
            <div>
                <h3>Documento de Identidade (RG)</h3>
                <input type="text" id="type_IDENTITY" value="RG" disabled hidden />
                <div>
                    <label for="number_IDENTITY">Número de Registro</label>
                    <input type="text" id="number_IDENTITY" minlength="7" maxlength="7" />
                </div>
                <div>
                    <label for="issuer_IDENTITY">Emissor</label>
                    <select id="issuer_IDENTITY">
                        <option value="SSP">SSP</option>
                    </select>
                </div>
                <div>
                    <label for="state_IDENTITY">Estado</label>
                    <select id="state_IDENTITY">
                        <option value="ES">ES</option>
                    </select>
                </div>
                <div>
                    <label for="date_IDENTITY">Data de Emissão</label>
                    <input type="date" id="date_IDENTITY" />
                </div>
            </div>

            <div>
                <h3>Endereço Pessoal</h3>
                <div>
                    <label for="zipCode">CEP</label>
                    <input type="number" id="zipCode" />
                </div>
                <div>
                    <label for="address">Endereço</label>
                    <input type="text" id="address" />
                </div>
                <div>
                    <label for="number">Número</label>
                    <input type="number" id="number" />
                </div>
                <div>
                    <label for="complement">Complemento</label>
                    <input type="text" id="complement" />
                </div>
                <div>
                    <label for="district">Distrito</label>
                    <input type="text" id="district" />
                </div>
                <div>
                    <label for="state">Estado</label>
                    <select id="state">
                        <option value="ES">ES</option>
                    </select>
                </div>
                <div>
                    <label for="city">Cidade</label>
                    <input type="text" id="city" />
                </div>
                <div>
                    <label for="homeType">Tipo de Casa</label>
                    <select id="homeType">
                        <option value="ALUGADA">Alugada</option>
                    </select>
                </div>
                <div>
                    <label for="homeSince">Tempo de Moradia</label>
                    <select id="homeSince">
                        <option value="MAIOR_2_ANOS">Maior que dois anos</option>
                    </select>
                </div>
            </div>

            <label for="hasVehicle">Possui Automóvel?</label>
            <input type="checkbox" id="hasVehicle" />
            <div id="vehicle" style="display: none">
                <label for="licensePlate">Placa</label>
                <input type="text" id="licensePlate" maxlength="7" minlength="7" />
            </div>

            <div>
                <label for="consumerUnit">Unidade Consumidora ENEL (matrícula conta de energia)</label>
                <input type="number" id="consumerUnit" />
            </div>

            <div>
                <h3>Dados Profissionais</h3>
                <div>
                    <label for="occupation">Ocupação</label>
                    <select id="occupation">
                        <option value="ASSALARIADO">Assalariado</option>
                    </select>
                </div>
                <div>
                    <label for="profession">Profissão</label>
                    <select id="profession">
                    </select>
                </div>
                <div>
                    <label for="companyName">Nome da Empresa</label>
                    <input type="text" id="companyName" />
                </div>
                <div>
                    <label for="phoneBusiness">Telefone</label>
                    <input type="number" id="phoneBusiness" minlength="10" maxlength="10" />
                </div>
                <div>
                    <label for="income">Renda Mensal</label>
                    <input type="number" id="income" />
                </div>
                <div>
                    <label for="payday">Dia de Pagamento</label>
                    <input type="number" id="payday" />
                </div>
                <div>
                    <label for="employmentSince">Tempo de Empresa</label>
                    <select id="employmentSince">
                        <option value="BETWEEN_ONE_AND_TWO_YEARS">Entre 1 e 2 anos</option>
                    </select>
                </div>

                <label for="hasBenefit">É aposentado ou pensionista?</label>
                <input type="checkbox" id="hasBenefit" />
                <div id="benefit" style="display: none">
                    <label for="benefitNumber">Número do Beneficiário</label>
                    <input type="number" id="benefitNumber" />
                </div>
                <div>
                    <h4>Endereço</h4>
                    <div>
                        <label for="zipCodeBusiness">CEP</label>
                        <input type="number" id="zipCodeBusiness" />
                    </div>
                    <div>
                        <label for="addressBusiness">Endereço</label>
                        <input type="text" id="addressBusiness" />
                    </div>
                    <div>
                        <label for="numberBusiness">Número</label>
                        <input type="number" id="numberBusiness" />
                    </div>
                    <div>
                        <label for="complementBusiness">Complemento</label>
                        <input type="text" id="complementBusiness" />
                    </div>
                </div>
                <div>
                    <label for="districtBusiness">Distrito</label>
                    <input type="text" id="districtBusiness" />
                </div>
                <div>
                    <label for="stateBusiness">Estado</label>
                    <select id="stateBusiness">
                        <option value="ES">ES</option>
                    </select>
                </div>
                <div>
                    <label for="cityBusiness">Cidade</label>
                    <input type="text" id="cityBusiness" />
                </div>
            </div>

            <div>
                <h3>Dados Bancários</h3>
                <div>
                    <label for="bank">Banco</label>
                    <select id="bank">
                        <option value="001">BANCO DO BRASIL S.A.</option>
                    </select>
                </div>
                <div>
                    <label for="typeBank">Tipo de Conta</label>
                    <select id="typeBank">
                        <option value="CONTA_CORRENTE_INDIVIDUAL">Conta Corrente Individual</option>
                    </select>
                </div>
                <div>
                    <label for="agencyBank">Agência</label>
                    <input type="number" id="agencyBank" />
                    <label for="numberBank">Número</label>
                    <input type="text" id="numberBank" maxlength="8"/>
                </div>
            </div>

            <div>
                <h3>Contatos Referenciais</h3>
                <button onclick="addRef()">Adicionar Contato</button>
                <div id="ref">

                </div>
            </div>
        </div>
        <div id="OPTIONS">
            <h4>Selecione os produtos da proposta a ser criada</h4>
            <label>Débito</label>
            <input type="checkbox" id="DEBT" name="products">

            <label>Cartão de Crédito</label>
            <input type="checkbox" id="CARD" name="products">

            <label>Empréstimos</label>
            <input type="checkbox" id="LOAN" name="products">

            <label>Financiamento de Veículos</label>
            <input type="checkbox" id="FINANCING_AUTO" name="products">

            <label>Refinanciamento de Veículos</label>
            <input type="checkbox" id="REFINANCING_AUTO" name="products">

            <label>Refinanciamento de Imóveis</label>
            <input type="checkbox" id="REFINANCING_HOME" name="products">

            <label>Capital de Giro</label>
            <input type="checkbox" id="WORKING_CAPITAL" name="products">
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
                    <select>
                        <option value="Fiat" id="BRAND_FINANCING_AUTO">Fiat</option>
                    </select>
                    <label>Modelo</label>
                    <select>
                        <option value="Mobi" id="MODEL_FINANCING_AUTO">Mobi</option>
                    </select>
                    <label>Código FIPE</label>
                    <input type="text" id="FIPE_CODE_FINANCING_AUTO">

                    <label>Valor</label>
                    <input type="number" id="FIPE_VALUE_FINANCING_AUTO">

                    <label>Ano</label>
                    <input type="number" id="YEAR_FINANCING_AUTO">
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
                    <select>
                        <option value="Fiat" id="BRAND_REFINANCING_AUTO">Fiat</option>
                    </select>
                    <label>Modelo</label>
                    <select>
                        <option value="Mobi" id="MODEL_REFINANCING_AUTO">Mobi</option>
                    </select>
                    <label>Código FIPE</label>
                    <input type="text" id="FIPE_CODE_REFINANCING_AUTO">

                    <label>Valor</label>
                    <input type="number" id="FIPE_VALUE_REFINANCING_AUTO">

                    <label>Ano</label>
                    <input type="number" id="YEAR_REFINANCING_AUTO">
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
                    <select>
                        <option value="HOUSE" id="REAL_ESTATE_TYPE_REFINANCING_HOME">Casa</option>
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
                    <input type="number" id="TAXNUMBER_WORKING_CAPITAL">
                </div>
                <div>
                    <label>Cargo na Empresa</label>
                    <select id="BUSINESS_OCCUPATION_WORKING_CAPITAL">
                        <option value="PROCURADOR">Procurador</option>
                    </select>
                </div>
                <div>
                    <label>Número de Colaboradores</label>
                    <select id="EMPLOYEES_COUNT_WORKING_CAPITAL">
                        <option value="DE_1_A_5">De 1 à 5</option>
                    </select>
                </div>
                <div>
                    <label>Receita Mensal</label>
                    <input type="number" id="INCOME_WORKING_CAPITAL">
                </div>
                <div>
                    <label>Objetivo do Empréstimo</label>
                    <select id="LOAN_OBJECTIVES_WORKING_CAPITAL">
                        <option value="EXPANSAO">Expansão</option>
                    </select>
                </div>
                <div>
                    <h6>Dados Bancários</h6>
                    <div>
                        <label>Banco</label>
                        <select>
                            <option value="0001" id="BANK_WORKING_CAPITAL">BANCO DO BRASIL S.A.</option>
                        </select>
                    </div>
                    <div>
                        <label>Banco</label>
                        <select>
                            <option value="CONTA_CORRENTE_INDIVIDUAL" id="ACCOUNTY_TYPE_WORKING_CAPITAL">Conta
                                Corrente Individual
                            </option>
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
    <button onclick="sendProposals()">Enviar Proposta</button>
</div>
</body>
<script>
    const ID = localStorage.getItem("id");
    let pipelineStatus = undefined;
    $("#id").text(ID);
    function refreshStatus() {
        $.ajax("./api/PipelineStatus.php", {
            type: "POST",
            data: {
                id: ID
            },
            success: function (data) {
                data = JSON.parse(data)
                pipelineStatus = data.status;
                $("#status").text(data.status)
                if(pipelineStatus === "Cadastro Realizado com Sucesso") {
                    clearInterval(status);
                }
            }
        })
    }
    refreshStatus();
    let status = setInterval(() => {
        refreshStatus();
    }, 10000)
    function createPoposals() {

    }

    const BUTTON_PROPOSALS = $("#BUTTON_PROPOSALS");
    const DIV_PROPOSALS = $("#DIV_PROPOSALS");

    BUTTON_PROPOSALS.on("click", function (e) {
        DIV_PROPOSALS.css("display") === "none" ? DIV_PROPOSALS.show() : DIV_PROPOSALS.hide();
    })

    const vehicle = $("#vehicle"),
        benefit = $("#benefit")

    $("#hasVehicle").on("change", function (e) {
        vehicle.css("display") === "none" ? vehicle.show() : vehicle.hide();
    })
    $("#hasBenefit").on("change", function (e) {
        benefit.css("display") === "none" ? benefit.show() : benefit.hide();
    })

    function addRef() {
        let refs = document.getElementsByClassName("ref").length;
        $("#ref").append(`
        <div class="ref">
            <label for="ref${refs}_name">Nome</label>
            <input type="text" id="ref${refs}_name" />
            <label for="ref${refs}_tel">Telefone</label>
            <input type="number" id="ref${refs}_tel" />
        </div>
    `);
    }

    $("[name='products']").on("click", function (e) {
        const target = $(`#DIV_${e.target.id}`);
        if (target && target.css("display") === "none") {
            target.show();
        } else {
            target.hide();
        }
    });

    function getProfessions() {
        fetch("./api/GetProfessions.php").then(response => response.json()).then(data => {

            console.log(data)
            for (const prof of data) {
                $("#profession").append(`<option value="${prof.key.replaceAll("\"","")}">${prof.value.replaceAll("\"","")}</option>`);
            }
        })
    }
    getProfessions();

    class signedClient {
        id;
        mother;
        gender;
        nationality;
        hometownState;
        hometown;
        education;
        relationshipStatus;
        phoneLandline;
        identity;
        address;
        vehicle;
        consumerUnit;
        business;
        bank;
        reference;
        products;
        constructor() {
            this.id = ID;
            this.reference = [];
            this.products = [];
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

    function sendProposals() {
        let client = new signedClient();
        if(!client.id) {
            client.id = ID;
        }
        client.mother = $("#mother").val();
        client.gender = $("#gender").val();
        client.nationality = $("#nationality").val();
        client.hometownState = $("#hometownState").val();
        client.hometown = $("#hometown").val();
        client.education = $("#education").val();
        client.relationshipStatus = $("#relationshipStatus").val();
        client.phoneLandline = $("#phoneLandline").val();
        client.identity = {
            type: $("#type_IDENTITY").val(),
            number: $("#number_IDENTITY").val(),
            issuer: $("#issuer_IDENTITY").val(),
            state: $("#state_IDENTITY").val(),
            issuingDate: $("#date_IDENTITY").val()
        }
        client.address = {
            zipCode: $("#zipCode").val(),
            address: $("#address").val(),
            number: $("#number").val(),
            complement: $("#complement").val(),
            district: $("#district").val(),
            state: $("#state").val(),
            city: $("#city").val(),
            homeType: $("#homeType").val(),
            homeSince: $("#homeSince").val()
        }
        client.vehicle = {
            licensePlate: $("#licensePlate").val()
        }
        client.consumerUnit = {
            number: $("#consumerUnit").val()
        }
        client.business = {
            occupation: $("#occupation").val(),
            profession: $("#profession").val(),
            companyName: $("#companyName").val(),
            phone: $("#phoneBusiness").val(),
            income: $("#income").val(),
            payday: $("#payday").val(),
            employmentSince: $("#employmentSince").val(),
            benefitNumber: $("#benefitNumber").val(),
            zipCode: $("#zipCodeBusiness").val(),
            address: $("#addressBusiness").val(),
            number: $("#numberBusiness").val(),
            complement: $("#complementBusiness").val(),
            district: $("#districtBusiness").val(),
            state: $("#stateBusiness").val(),
            city: $("#cityBusiness").val()
        }
        client.bank = {
            bank: $("#bank").val(),
            type: $("#typeBank").val(),
            agency: $("#agencyBank").val(),
            account: $("#numberBank").val()
        }
        for(let i = 0; i < document.getElementsByClassName("ref").length; i++){
            client.reference.push({
                name: $(`#ref${i}_name`).val(),
                phone: $(`#ref${i}_tel`).val()
            })
        }

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
        console.log(client)
        $.ajax("./api/Proposal.php", {
            type: "POST",
            data: client,
            success: function (data) {
                console.log(data)
                localStorage.setItem("proposals", data);
            }
        });
    }

    async function sendDocument() {
        let file = await $("#documentFile").prop('files')[0];
        const formData = new FormData();
        formData.append('id', ID);
        formData.append('type', $("#documentType").val());
        formData.append('file', file);
        fetch("./api/SendDocument.php", {
            method: "POST",
            body: formData,
        }).then(response => response.json()).then(data => {
            console.log(data)
        })
    }

    function getContract() {

    }

    function signContract() {

    }
</script>
</html>