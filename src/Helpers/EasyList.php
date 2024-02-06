<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

class EasyList
{
    public static function occupyType(int|string|null $key): string
    {
        $list = [
            0 => "INSS",
            1 => "SIAPE",
            2 => "GOVERNO_ESTADUAL",
            3 => "PREFEITURA_MUNICIPAL",
            4 => "FORCAS_ARMADAS",
            5 => "TRIBUNAL_DE_JUSTICA",
            6 => "ASSEMBLEIA_LEGISLATIVA"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function businessProfession(int|string|null $key): string
    {
        $list = [
            0 => "SOCIO_DONO",
            1 => "ADMINISTRADOR_DIRETOR",
            2 => "PROCURADOR",
            3 => "OUTROS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
    public static function creditCardBenefits(int|string|null $key): string
    {
        $list = [
            0 => "ANUIDADE_GRATIS",
            1 => "MILHAS_AERIAS",
            2 => "DESCONTOS",
            3 => "CONTA_DIGITAL",
            4 => "PROGRAMAS_DE_VANTAGENS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
    public static function employeesCount(int|string|null $key): string
    {
        $list = [
            0 => "NENHUM",
            1 => "DE_1_A_5",
            2 => "DE_6_A_10",
            3 => "DE_11_A_20",
            4 => "DE_21_A_50",
            5 => "DE_51_A_100",
            6 => "MAIS_DE_100"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
    public static function identity(int|string|null $key): string
    {
        $list = [
            0 => "RG",
            1 => "CNH",
            2 => "PASSAPORTE",
            3 => "CARTEIRA_CRC",
            4 => "CARTEIRA_CREA",
            5 => "CARTEIRA_OAB",
            6 => "CARTEIRA_CRE"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
    public static function loanObjectives(int|string|null $key): string
    {
        $list = [
            0 => "AJUDAR_UMA_OUTRA_PESSOA_DA_FAMILIA",
            1 => "BELEZA_E_SAUDE",
            2 => "COMECAR_UM_NOVO_NEGOCIO",
            3 => "COMPRAR_CONSERTAR_UM_CARRO",
            4 => "COMPRAR_REFORMAR_UMA_CASA",
            5 => "EDUCACAO",
            6 => "EVENTOS_FESTAS",
            7 => "FAZER_COMPRAS",
            8 => "FERIAS_VIAGENS",
            9 => "PAGAR_CONTAS",
            10 => "PAGAR_OUTRAS_DIVIDAS",
            11 => "OUTRAS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function workingCapitalLoanObjectives(int|string|null $key): string
    {
        $list = [
            0 => "CAPITAL_DE_GIRO",
            1 => "RENEGOCIACAO_DE_DIVIDAS",
            2 => "MARKETING_E_VENDAS",
            3 => "EXPANSAO_DE_NEGOCIOS",
            4 => "EXPANSAO",
            5 => "ESTOQUE",
            6 => "REFORMA",
            7 => "USO_PESSOAL"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function documents(int|string|null $key): string
    {
        $list = [
            0 => "SELF",
            1 => "IDENTITY_FRONT",
            2 => "IDENTITY_BACK",
            3 => "ADDRESS_PROOF",
            4 => "INCOME_PROOF"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
    public static function profession(int|string|null $key): array|bool
    {
        $list = [
            0 => ["code" => "ACOUGUEIRO", "name" => "Açougueiro"],
            1 => ["code" => "ACUMPURISTA", "name" => "Acumpurista"],
            2 => ["code" => "ADESTRADOR", "name" => "Adestrador/Tratador de Animais/Treinador de Animais"],
            3 => ["code" => "ADMINISTRADOR", "name" => "Administrador"],
            4 => ["code" => "ADVOGADO", "name" => "Advogado"],
            5 => ["code" => "AEROVIARIO", "name" => "Aeroviario/Empregado de Aeroporto"],
            6 => ["code" => "AFIADOR", "name" => "Afiador"],
            7 => ["code" => "AGENCIADOR_DE_PROPAGANDA", "name" => "Agenciador de Propaganda"],
            8 => ["code" => "AGENCIADOR_CARGAS_TRANSPORTES", "name" => "Agenciador de Serv. (Cargas/Transportes)"],
            9 => ["code" => "AGENTE_ADMINISTRATIVO", "name" => "Agente Administrativo"],
            10 => ["code" => "AGENTE_DE_COMPRA_VENDA", "name" => "Agente de Compra e Venda"],
            11 => ["code" => "AGENTE_DE_SERVICOS_FUNERARIOS", "name" => "Agente de Serviços Funerarios"],
            12 => ["code" => "AGENTE_DE_VIAGEM", "name" => "Agente de viagem/Agente de turismo/Operador de turismo"],
            13 => ["code" => "AGRONOMO", "name" => "Agronomo"],
            14 => ["code" => "AJUDANTE_GERAL", "name" => "Ajudante Geral"],
            15 => ["code" => "AJUSTADOR_RETIFICADOR", "name" => "Ajustador/Retificador"],
            16 => ["code" => "ALFAIATE", "name" => "Alfaiate"],
            17 => ["code" => "AMBULANTES", "name" => "Ambulantes(Camelo,Pipoqueiro,etc)"],
            18 => ["code" => "ANALISTA_RECURSOS_HUMANOS", "name" => "Analista de Cargos/Recursos Humanos etc"],
            19 => ["code" => "ANALISTA_CREDITO_E_COBRANCA", "name" => "Analista de Cred/Cad/Cobr/Garant/Inf etc"],
            20 => ["code" => "ANALISTA_CUSTOS_PROJ_SERV_ECONOMIA", "name" => "Analista de Custos/Proj/Serv/Economia etc"],
            21 => ["code" => "ANALISTA_PRODUCAO_CRONOALISTA", "name" => "Analista de Producao/Cronoalista"],
            22 => ["code" => "ANALISTA_SISTEMAS", "name" => "Analista de Sistemas"],
            23 => ["code" => "APOSENTADO", "name" => "Aposentado(exceto funcionario publico)"],
            24 => ["code" => "ARBITRO_DE_ESPORTES", "name" => "Arbitro de Esportes"],
            25 => ["code" => "ARMADOR_DE_FERRAGENS", "name" => "Armador de Ferragens"],
            26 => ["code" => "ARMEIRO", "name" => "Armeiro"],
            27 => ["code" => "ARQUEOLOGO", "name" => "Arqueologo"],
            28 => ["code" => "ARQUITETO", "name" => "Arquiteto"],
            29 => ["code" => "ARQUIVISTA", "name" => "Arquivista"],
            30 => ["code" => "ARTESAO", "name" => "Artesao"],
            31 => ["code" => "ARTISTA_PLASTICO", "name" => "Artista Plastico"],
            32 => ["code" => "ASCENSORISTA", "name" => "Ascensorista"],
            33 => ["code" => "ASSISTENTE_SOCIAL", "name" => "Assistente Social"],
            34 => ["code" => "ASTRONOMO", "name" => "Astronomo"],
            35 => ["code" => "ATLETA", "name" => "Atleta Profissional"],
            36 => ["code" => "ATOR", "name" => "Ator"],
            37 => ["code" => "ATUARIO", "name" => "Atuario"],
            38 => ["code" => "AUDITOR_PUBLICO", "name" => "Auditor Publico"],
            39 => ["code" => "AUXILIAR_COZINHA_LIMPEZA_COSTURA_COPA", "name" => "Auxiliar Cozinha/Limpeza/Costura/Copa etc"],
            40 => ["code" => "AUXILIAR_DE_ENFERMAGEM_TECNICO", "name" => "Auxiliar de Enfermagem/Tecnico de Enfermagem"],
            41 => ["code" => "AUXILIAR_DE_ESCRITORIO", "name" => "Auxiliar de Escritorio e Ass."],
            42 => ["code" => "AUXILIAR_DE_LABORATORIO", "name" => "Auxiliar de Laboratorio"],
            43 => ["code" => "AUXILIAR_DE_SERVICOS_GERAIS", "name" => "Auxiliar de Serviços Gerais"],
            44 => ["code" => "AVALIADOR", "name" => "Avaliador"],
            45 => ["code" => "CUIDADOR", "name" => "Cuidador"],
            46 => ["code" => "DANCARINO", "name" => "Dançarino"],
            47 => ["code" => "BANCARIO", "name" => "Bancario"],
            48 => ["code" => "BARBEIRO", "name" => "Barbeiro"],
            49 => ["code" => "BARISTA", "name" => "Barista/Barman/Barwoman"],
            50 => ["code" => "BIBLIOTECARIO", "name" => "Bibliotecario"],
            51 => ["code" => "BILHETEIRO_COBRADOR", "name" => "Bilheteiro(Transp/Diversao)/Trocador/Cobrador Transp Passageiro/Caixa"],
            52 => ["code" => "BIOLOGO", "name" => "Biologo"],
            53 => ["code" => "BIOMEDICO", "name" => "Biomedico"],
            54 => ["code" => "BOLSISTA", "name" => "Bolsista"],
            55 => ["code" => "BOMBEIRO_ENCANADOR", "name" => "Bombeiro/Encanador"],
            56 => ["code" => "BORRACHEIRO", "name" => "Borracheiro"],
            57 => ["code" => "CABELEIREIRO", "name" => "Cabeleireiro"],
            58 => ["code" => "CAIXEIRO_VIAJANTE", "name" => "Caixeiro-Viajante"],
            59 => ["code" => "CAMAREIRA_ARRUMADEIRA", "name" => "Camareira/Arrumadeira"],
            60 => ["code" => "CANTOR", "name" => "Cantor"],
            61 => ["code" => "CARGOS_DE_CONFIANCA_COMISSOES", "name" => "Cargos de Confiança/Comissoes"],
            62 => ["code" => "CARREGADOR", "name" => "Carregador"],
            63 => ["code" => "CARTEIRO", "name" => "Carteiro"],
            64 => ["code" => "CARTORARIO", "name" => "Cartorario"],
            65 => ["code" => "CASEIRO", "name" => "Caseiro"],
            66 => ["code" => "CAVALARICO", "name" => "Cavalarico/Ferrador/Tratador de Animais"],
            67 => ["code" => "CENOGRAFO", "name" => "Cenografo"],
            68 => ["code" => "CHAVEIRO", "name" => "Chaveiro"],
            69 => ["code" => "CHEFE_DA_PRODUCAO", "name" => "Chefe da Producao"],
            70 => ["code" => "CHEFE_INTERMEDIARIO", "name" => "Chefe Intermediario"],
            71 => ["code" => "COBRADOR_EM_GERAL", "name" => "Cobrador em Geral"],
            72 => ["code" => "COMANDANTE_DE_EMBARCACOES", "name" => "Comandante de Embarcacoes"],
            73 => ["code" => "COMENTARISTA", "name" => "Comentarista"],
            74 => ["code" => "COMISSARIO_DE_BORDO", "name" => "Comissario de Bordo"],
            75 => ["code" => "COMPOSITOR", "name" => "Compositor"],
            76 => ["code" => "COMUNICOLOGO", "name" => "Comunicologo"],
            77 => ["code" => "CONSELHEIRO_TUTELAR", "name" => "Conselheiro Tutelar"],
            78 => ["code" => "CONSULTOR_DE_EMPRESAS", "name" => "Consultor de Empresas"],
            79 => ["code" => "CONTADOR", "name" => "Contador"],
            80 => ["code" => "CONTRAMESTRE", "name" => "Contramestre"],
            81 => ["code" => "CONTROLADOR_DE_VOO", "name" => "Controlador de Voo"],
            82 => ["code" => "COREOGRAFO", "name" => "Coreografo"],
            83 => ["code" => "CORRETOR_EM_GERAL", "name" => "Corretor em Geral"],
            84 => ["code" => "CORTADOR", "name" => "Cortador"],
            85 => ["code" => "COSTUREIRA", "name" => "Costureira/Bordadeira/Cerzideira"],
            86 => ["code" => "COZINHEIRO_CONFEITEIRO_PADEIRO", "name" => "Cozinheiro/Confeiteiro/Padeiro"],
            87 => ["code" => "DECORADOR", "name" => "Decorador"],
            88 => ["code" => "DEGUSTADOR_VINHO_CAFE", "name" => "Degustador(Vinho/Café etc)"],
            89 => ["code" => "DELEGADO_DE_POLICIA", "name" => "Delegado de Policia"],
            90 => ["code" => "DEMONSTRADOR", "name" => "Demonstrador"],
            91 => ["code" => "DENTISTA_ODONTOLOGO", "name" => "Dentista/Odontologo"],
            92 => ["code" => "DEPILADOR", "name" => "Depilador"],
            93 => ["code" => "DEPUTADO_ESTADUAL_FEDERAL", "name" => "Deputado Estadual/Federal"],
            94 => ["code" => "DESEMBARGADOR", "name" => "Desembargador"],
            95 => ["code" => "DESENHISTA", "name" => "Desenhista"],
            96 => ["code" => "DESPACHANTE_INCLUSIVE_ADUANEIRO", "name" => "Despachante (inclusive aduaneiro)"],
            97 => ["code" => "DETETIVE_INVESTIGADOR", "name" => "Detetive/Investigador"],
            98 => ["code" => "DETETIZADOR", "name" => "Detetizador"],
            99 => ["code" => "DIGITADOR", "name" => "Digitador"],
            100 => ["code" => "DIPLOMATA", "name" => "Diplomata"],
            101 => ["code" => "DIRETOR_DE_EMPRESA", "name" => "Diretor de Empresa"],
            102 => ["code" => "DIRETOR_DE_ESPETACULOS", "name" => "Diretor de Espetaculos"],
            103 => ["code" => "DIRETOR_DE_ESTABELECIMENTO_DE_ENSINO", "name" => "Diretor de Estabelecimento de Ensino"],
            104 => ["code" => "ECONOMISTA", "name" => "Economista"],
            105 => ["code" => "ELETRICISTA", "name" => "Eletricista"],
            106 => ["code" => "EMBALADOR", "name" => "Embalador"],
            107 => ["code" => "EMBALSAMADOR", "name" => "Embalsamador"],
            108 => ["code" => "EMPREGADA_DOMESTICA", "name" => "Empregada domestica"],
            109 => ["code" => "EMPRESARIO_DE_ATLETA", "name" => "Empresario de Atleta"],
            110 => ["code" => "ENFERMEIRO", "name" => "Enfermeiro"],
            111 => ["code" => "ENGENHEIRO", "name" => "Engenheiro"],
            112 => ["code" => "ENTREVISTADOR_CENSO_PESQUISA_PRECOS", "name" => "Entrevistador(Censo/Pesquisa/Preços)"],
            113 => ["code" => "ESCRITOR", "name" => "Escritor"],
            114 => ["code" => "ESCULTOR", "name" => "Escultor"],
            115 => ["code" => "ESOTERICOS_ASTROLOGOS_TAROLOGO_NUMEROLOGO", "name" => "Esotericos(Astrologos/Tarologo/Numerologo etc)"],
            116 => ["code" => "ESTATISTICO", "name" => "Estatistico"],
            117 => ["code" => "ESTETICISTA", "name" => "Esteticista"],
            118 => ["code" => "ESTILISTA_MODELISTA", "name" => "Estilista/Modelista"],
            119 => ["code" => "ESTIVADOR", "name" => "Estivador"],
            120 => ["code" => "FARMACEUTICO", "name" => "Farmaceutico"],
            121 => ["code" => "FAXINEIRO_DIARISTA", "name" => "Faxineiro/Diarista"],
            122 => ["code" => "FEIRANTE", "name" => "Feirante"],
            123 => ["code" => "FERRAMENTEIRO", "name" => "Ferramenteiro"],
            124 => ["code" => "FISCAL", "name" => "Fiscal"],
            125 => ["code" => "FISCAL_DE_PRODUCAO", "name" => "Fiscal de Producao"],
            126 => ["code" => "FISCAL_SERVICOS_DE_TRANSPORTE", "name" => "Fiscal Serviços de Transporte"],
            127 => ["code" => "FISICO", "name" => "Fisico"],
            128 => ["code" => "FISIOTERAPEUTA", "name" => "Fisioterapeuta"],
            129 => ["code" => "FOGUISTA_DE_EMBARCACOES_OU_LOCOMOTIVAS", "name" => "Foguista de Embarcacoes ou Locomotivas"],
            130 => ["code" => "FONOAUDIOLOGO", "name" => "Fonoaudiologo"],
            131 => ["code" => "FORCAS_ARMADAS_SOLDADO_MARINHEIRO", "name" => "Forças Armadas (Soldado,Marinheiro,etc)"],
            132 => ["code" => "FOTOGRAFO", "name" => "Fotografo"],
            133 => ["code" => "FRENTISTA_TRABALHADOR_DE_POSTO_DE_GASOLINA", "name" => "Frentista/Trabalhador de posto de gasolina"],
            134 => ["code" => "FUNCIONARIO_PUBLICO_CIVIL_APOSENTADO", "name" => "Funcionario Publico Civil Aposentado"],
            135 => ["code" => "FUNDIDOR", "name" => "Fundidor"],
            136 => ["code" => "GARAGISTA", "name" => "Garagista"],
            137 => ["code" => "GARCOM_MAITRE", "name" => "Garçom/Maitre"],
            138 => ["code" => "GARIMPEIRO", "name" => "Garimpeiro"],
            139 => ["code" => "GEOGRAFO", "name" => "Geografo"],
            140 => ["code" => "GEOLOGO", "name" => "Geologo"],
            141 => ["code" => "GERENTE", "name" => "Gerente"],
            142 => ["code" => "GESSISTA", "name" => "Gessista"],
            143 => ["code" => "GOVERNADOR_DE_ESTADO", "name" => "Governador de Estado"],
            144 => ["code" => "GOVERNANTA", "name" => "Governanta"],
            145 => ["code" => "GUIA_TURISTICO", "name" => "Guia Turistico"],
            146 => ["code" => "HOSPITAL_TRABALHADORES_EM_GERAL", "name" => "Hospital - Trabalhadores em Geral"],
            147 => ["code" => "IMPERMEABILIZADOR", "name" => "Impermeabilizador"],
            148 => ["code" => "INSPETOR", "name" => "Inspetor"],
            149 => ["code" => "INSPETOR_DE_CONTROLE_DE_QUALIDADE", "name" => "Inspetor de Controle de Qualidade"],
            150 => ["code" => "INSTALADOR_DE_GAS_AGUA_ESGOTO", "name" => "Instalador de Gas,Agua e Esgoto"],
            151 => ["code" => "INSTRUMENTADOR_CIRURGICO", "name" => "Instrumentador Cirurgico"],
            152 => ["code" => "INSTRUMENTISTA", "name" => "Instrumentista"],
            153 => ["code" => "INSTRUTOR_DE_AUTOESCOLA", "name" => "Instrutor de Autoescola"],
            154 => ["code" => "INSTRUTOR_PROFESSOR_CURSOS_LIVRES", "name" => "Instrutor/Professor de Cursos Livres(Ginastica,Ingles,Informatica)"],
            155 => ["code" => "INTERPRETE_TRADUTOR", "name" => "Interprete/Tradutor"],
            156 => ["code" => "JARDINEIRO", "name" => "Jardineiro"],
            157 => ["code" => "JOALHEIRO", "name" => "Joalheiro"],
            158 => ["code" => "JORNALEIRO", "name" => "Jornaleiro"],
            159 => ["code" => "JORNALISTA_REPORTER", "name" => "Jornalista/Reporter"],
            160 => ["code" => "JUIZ_DE_DIREITO", "name" => "Juiz de Direito"],
            161 => ["code" => "LANTERNEIRO", "name" => "Lanterneiro"],
            162 => ["code" => "LAVADOR_DE_CARROS_ROUPAS", "name" => "Lavador de Carros/Roupas"],
            163 => ["code" => "LEILOEIRO", "name" => "Leiloeiro"],
            164 => ["code" => "LEITURISTA", "name" => "Leiturista"],
            165 => ["code" => "GARI", "name" => "Lixeiro/Gari/Varredor/Coletor de Lixo"],
            166 => ["code" => "LOCUTOR", "name" => "Locutor"],
            167 => ["code" => "MANICURE_PEDICURE_PODOLOGO", "name" => "Manicure/Pedicure/Podologo"],
            168 => ["code" => "MANOBRISTA_NAO_EMPREGADO_GUARDADOR_DE_CARRO", "name" => "Manobrista (não empregado)/Guardador de Carro"],
            169 => ["code" => "MAQUILADOR", "name" => "Maquilador"],
            170 => ["code" => "MAQUINISTA_DE_EMBARCACOES_OU_LOCOMOTIVAS", "name" => "Maquinista de Embarcacoes ou Locomotivas"],
            171 => ["code" => "MARCENEIRO_CARPINTEIRO", "name" => "Marceneiro/Carpinteiro"],
            172 => ["code" => "MARINHEIRO_ASS", "name" => "Marinheiro e Ass."],
            173 => ["code" => "MASSAGISTA", "name" => "Massagista"],
            174 => ["code" => "MATEMATICO", "name" => "Matematico"],
            175 => ["code" => "MECANICO", "name" => "Mecanico"],
            176 => ["code" => "MEDICO", "name" => "Medico"],
            177 => ["code" => "MEMBRO_DA_DEFENSORIA_PUBLICA", "name" => "Membro da Defensoria Publica"],
            178 => ["code" => "MEMBRO_DE_EQUIPE_TECNICA_DE_ESPORTES", "name" => "Membro de Equipe tecnica de esportes"],
            179 => ["code" => "MEMBRO_DO_MINISTERIO_PUBLICO", "name" => "Membro do Ministerio Publico"],
            180 => ["code" => "MEMBRO_EQUIPE_TECNICA_ESPORTES", "name" => "Membro Equipe Técnica Esportes"],
            181 => ["code" => "MESTRE_DE_PRODUCAO", "name" => "Mestre de Producao"],
            182 => ["code" => "METEOROLOGISTA", "name" => "Meteorologista"],
            183 => ["code" => "MILITAR_EM_GERAL", "name" => "Militar em Geral"],
            184 => ["code" => "MILITAR_REFORMADO", "name" => "Militar reformado"],
            185 => ["code" => "MINISTRO_DE_ESTADO", "name" => "Ministro de Estado"],
            186 => ["code" => "MINISTRO_DE_TRIBUNAL_SUPERIOR", "name" => "Ministro de Tribunal Superior"],
            187 => ["code" => "MODELO_DE_MODAS", "name" => "Modelo de Modas"],
            188 => ["code" => "MONTADOR", "name" => "Montador"],
            189 => ["code" => "MOTORISTA_TRANSPORTE_CARGAS", "name" => "Motorista (veiculo transporte cargas)"],
            190 => ["code" => "MOTORISTA_TRANSPORTE_DE_PASSAGEIROS", "name" => "Motorista (veiculo transporte de passageiros)"],
            191 => ["code" => "MOTORISTA_AUTONOMO_TAXISTA_PRINCIPAL", "name" => "Motorista autonomo (taxista principal)"],
            192 => ["code" => "MUSEOLOGO", "name" => "Museologo"],
            193 => ["code" => "MUSICO", "name" => "Musico"],
            194 => ["code" => "NUTRICIONISTA", "name" => "Nutricionista"],
            195 => ["code" => "OFFICE_BOY_CONTINUO_ENTREGADOR_MOTOBOY", "name" => "Office boy/Continuo/Entregador/Motoboy"],
            196 => ["code" => "OFICIAL_DE_FORCAS_AUX_FORCAS_ARMADAS", "name" => "Oficial de Forças Aux e Forças Armadas"],
            197 => ["code" => "OFICIAL_DE_JUSTICA", "name" => "Oficial de Justiça"],
            198 => ["code" => "OPERADOR_DE_CALDEIRA", "name" => "Operador de Caldeira"],
            199 => ["code" => "OPERADOR_DE_CAMERAS_DE_CINEMA_TV", "name" => "Operador de Cameras de Cinema e TV"],
            200 => ["code" => "OPERADOR_DE_COMPUTADOR", "name" => "Operador de Computador"],
            201 => ["code" => "OPERADOR_DE_GUINDASTE", "name" => "Operador de Guindaste"],
            202 => ["code" => "OPERADOR_DE_ILUMINACAO", "name" => "Operador de Iluminacao"],
            203 => ["code" => "OPERADOR_DE_MAQUINAS_APARELHOS", "name" => "Operador de Maquinas e Aparelhos"],
            204 => ["code" => "OPERADOR_DE_TELEMARKETING", "name" => "Operador de Telemarketing"],
            205 => ["code" => "OPERARIO_SEMI_ESPECIALIZADO_PRODUCAO", "name" => "Operario Semi-especializado Producao"],
            206 => ["code" => "ORIENTADOR_PEDAGOGICO", "name" => "Orientador Pedagogico"],
            207 => ["code" => "OURIVES", "name" => "Ourives"],
            208 => ["code" => "PAISAGISTA", "name" => "Paisagista"],
            209 => ["code" => "PEDREIRO", "name" => "Pedreiro"],
            210 => ["code" => "PENSAO_ALIMENTICIA_PARA_FILHOS", "name" => "Pensao alimenticia para filhos"],
            211 => ["code" => "PENSIONISTA", "name" => "Pensionista"],
            212 => ["code" => "PERSONAL_TRAINER", "name" => "Personal Trainer"],
            213 => ["code" => "PESCADOR", "name" => "Pescador"],
            214 => ["code" => "PESQUISADOR_CIENTIFICO", "name" => "Pesquisador Cientifico"],
            215 => ["code" => "PILOTO_DE_AERONAVES", "name" => "Piloto de Aeronaves"],
            216 => ["code" => "PINTOR", "name" => "Pintor"],
            217 => ["code" => "PISCICULTOR", "name" => "Piscicultor"],
            218 => ["code" => "PORTEIRO_ZELADOR", "name" => "Porteiro/Zelador"],
            219 => ["code" => "PORTUARIO", "name" => "Portuario"],
            220 => ["code" => "PREFEITO", "name" => "Prefeito"],
            221 => ["code" => "PRENSISTA_ESTAMPADOR", "name" => "Prensista/Estampador"],
            222 => ["code" => "PROCURADOR_MEMBROS_DA_PROCURADORIA", "name" => "Procurador/Membros da Procuradoria"],
            223 => ["code" => "PRODUTOR_DE_EVENTOS", "name" => "Produtor de Eventos(Promoter)/Produtor de Artes em geral"],
            224 => ["code" => "PROFESSOR_AUTONOMO_PARTICULAR", "name" => "Professor Autonomo/Particular"],
            225 => ["code" => "PROFESSOR_ENSINO_FUNDAMENTAL_E_MEDIO", "name" => "Professor de Ensino Fundamental e Medio"],
            226 => ["code" => "PROFESSOR_ENSINO_SUPERIOR", "name" => "Professor de Ensino Superior"],
            227 => ["code" => "PROFESSOR_IDIOMAS", "name" => "Professor de Idiomas"],
            228 => ["code" => "PROFISSIONAL_CIRCO_ACROBATA", "name" => "Profissional de Circo/Acrobata"],
            229 => ["code" => "PROFISSIONAL_LETRAS_ARTES", "name" => "Profissional de Letras e Artes"],
            230 => ["code" => "PROGRAMADOR", "name" => "Programador"],
            231 => ["code" => "PROMOTOR_DE_VENDAS", "name" => "Promotor de Vendas"],
            232 => ["code" => "PROMOTOR_PUBLICO", "name" => "Promotor Publico"],
            233 => ["code" => "PROPRIETARIO_COMERCIAL", "name" => "Proprietario de Estabel. Comercial"],
            234 => ["code" => "PROPRIETARIO_INDUSTRIAL", "name" => "Proprietario de Estabel. Industrial"],
            235 => ["code" => "PROPRIETARIO_MICROEMPRESA", "name" => "Proprietario de Microempresa"],
            236 => ["code" => "PROPRIETARIO_PRESTACAO_SERVICOS", "name" => "Proprietario de Estabel. de Prestaçao Serviços"],
            237 => ["code" => "PROPRIETARIO_RURAL_AGRICOLA_FLORESTAL_PECUARI", "name" => "Proprietario de Estabel. Rural,Agricola,Florestal,Pecuario"],
            238 => ["code" => "PROTETICO", "name" => "Protetico"],
            239 => ["code" => "PSICANALISTA", "name" => "Psicologo/Terapeuta/Psicanalista"],
            240 => ["code" => "PSICOTERAPEUTA", "name" => "Psicologo/Terapeuta/Psicoterapeuta"],
            241 => ["code" => "PUBLICITARIO", "name" => "Publicitario"],
            242 => ["code" => "QUIMICO", "name" => "Quimico"],
            243 => ["code" => "RADIALISTA", "name" => "Radialista"],
            244 => ["code" => "RECEPCIONISTA", "name" => "Recepcionista"],
            245 => ["code" => "RECICLAGEM", "name" => "Reciclagem - Trabalhadores em geral"],
            246 => ["code" => "RECREADOR", "name" => "Recreador"],
            247 => ["code" => "RELACOES_PUBLICAS", "name" => "Relacoes Publicas"],
            248 => ["code" => "RELOJOEIRO", "name" => "Relojoeiro"],
            249 => ["code" => "REPRESENTANTE_COMERCIAL", "name" => "Representante Comercial"],
            250 => ["code" => "SAPATEIRO", "name" => "Sapateiro"],
            251 => ["code" => "SECRETARIA", "name" => "Secretaria"],
            252 => ["code" => "SECRETARIO_DE_ESTADO", "name" => "Secretario de Estado"],
            253 => ["code" => "SECRETARIO_MUNICIPAL", "name" => "Secretario Municipal"],
            254 => ["code" => "SECURITARIO", "name" => "Securitario"],
            255 => ["code" => "SEGURANCA_PATRIMONIAL", "name" => "Segurança Patrimonial - trabalhadores em geral"],
            256 => ["code" => "SENADOR", "name" => "Senador"],
            257 => ["code" => "SERRALHEIRO", "name" => "Serralheiro"],
            258 => ["code" => "SERVENTUARIO_DA_JUSTICA", "name" => "Serventuario da Justiça"],
            259 => ["code" => "SERVICOS_DE_MANUTENCAO", "name" => "Serviços de Manutencao"],
            260 => ["code" => "SOCIOLOGO", "name" => "Sociologo"],
            261 => ["code" => "SOLDADO_CORPO_DE_BOMBEIROS", "name" => "Soldado Corpo de Bombeiros"],
            262 => ["code" => "SUPERINTENDENTE", "name" => "Superintendente"],
            263 => ["code" => "SUPERVISOR", "name" => "Supervisor"],
            264 => ["code" => "SUPERVISOR_TECNICO_OPERACIONAL", "name" => "Supervisor/Tecnico Operacional"],
            265 => ["code" => "TABELIAO", "name" => "Tabeliao"],
            266 => ["code" => "TAPECEIRO", "name" => "Tapeceiro"],
            267 => ["code" => "TECNICO_DA_RECEITA_FEDERAL", "name" => "Tecnico da Receita Federal"],
            268 => ["code" => "TECNICO_DE_BIOLOGIA", "name" => "Tecnico de Biologia"],
            269 => ["code" => "TECNICO_DE_CONTABILIDADE", "name" => "Tecnico de Contabilidade"],
            270 => ["code" => "TECNICO_DE_ELETRICIDADE", "name" => "Tecnico de Eletricidade"],
            271 => ["code" => "TECNICO_DE_ELETRONICA", "name" => "Tecnico de Eletronica"],
            272 => ["code" => "TECNICO_DE_ESTATISTICA", "name" => "Tecnico de Estatistica"],
            273 => ["code" => "TECNICO_DE_LABORATORIO", "name" => "Tecnico de Laboratorio"],
            274 => ["code" => "TECNICO_DE_MECANICA", "name" => "Tecnico de Mecanica"],
            275 => ["code" => "TECNICO_DE_QUIMICA", "name" => "Tecnico de Quimica"],
            276 => ["code" => "TECNICO_DE_RADIOLOGIA", "name" => "Tecnico de Radiologia"],
            277 => ["code" => "TECNICO_DE_TELECOMUNICACOES", "name" => "Tecnico de Telecomunicacoes"],
            278 => ["code" => "TECNICO_EM_AGRONOMIA", "name" => "Tecnico em Agronomia"],
            279 => ["code" => "TECNICO_EM_DESPORTOS", "name" => "Tecnico em Desportos"],
            280 => ["code" => "TECNICO_EM_EDIFICACOES", "name" => "Tecnico em Edificacoes"],
            281 => ["code" => "TECNICO_EM_ELETRONICA", "name" => "Tecnico em Eletronica"],
            282 => ["code" => "TECNICO_EM_ESTATISTICA", "name" => "Tecnico em Estatistica"],
            283 => ["code" => "TECNICO_EM_FARMACIA", "name" => "Tecnico em Farmacia"],
            284 => ["code" => "TECNICO_EM_FINANCAS", "name" => "Tecnico em Finanças"],
            285 => ["code" => "TECNICO_EM_INFORMATICA", "name" => "Tecnico em Informatica"],
            286 => ["code" => "TECNICO_EM_INSEMINACAO", "name" => "Tecnico em Inseminacao"],
            287 => ["code" => "TECNICO_EM_MECANICA", "name" => "Tecnico em Mecanica"],
            288 => ["code" => "TECNICO_EM_QUIMICA", "name" => "Tecnico em Quimica"],
            289 => ["code" => "TECNICO_EM_RADIOLOGIA", "name" => "Tecnico em Radiologia"],
            290 => ["code" => "TECNICO_EM_REFRIGERACAO", "name" => "Tecnico em Refrigeracao"],
            291 => ["code" => "TECNICO_EM_TELECOMUNICACOES", "name" => "Tecnico em Telecomunicacoes"],
            292 => ["code" => "TECNICO_PROJETISTA", "name" => "Tecnico Projetista"],
            293 => ["code" => "TELEFONISTA", "name" => "Telefonista"],
            294 => ["code" => "TERAPEUTA_OCUPACIONAL", "name" => "Terapeuta Ocupacional"],
            295 => ["code" => "TORNEIRO", "name" => "Torneiro"],
            296 => ["code" => "TRABALHADOR_DA_ADMINISTRACAO", "name" => "Trabalhador da Administracao"],
            297 => ["code" => "TRABALHADOR_DA_PESCA", "name" => "Trabalhador da Pesca"],
            298 => ["code" => "TRABALHADOR_DE_ARTES_GRAFICAS", "name" => "Trabalhador de Artes Graficas"],
            299 => ["code" => "TRABALHADOR_DE_CONSTRUCAO_CIVIL", "name" => "Trabalhador de Construcao Civil"],
            300 => ["code" => "TRABALHADOR_FABRICACAO_FUMO_CIGARRO_CHARUTOS", "name" => "Trabalhador Fabricacao fumo/cigarro/charutos"],
            301 => ["code" => "TRABALHADOR_FABRICACAO_FUMO_CIGARROS_CHARUTOS", "name" => "Trabalhador Fabricacao fumo/cigarros/charutos"],
            302 => ["code" => "TRABALHADOR_INDUSTRIAL", "name" => "Trabalhador Industrial"],
            303 => ["code" => "TRABALHADOR_RURAL", "name" => "Trabalhador Rural"],
            304 => ["code" => "TRABALHADOR_SERV_CONTABCAIXA_ASS", "name" => "Trabalhador serv. contab.caixa e ass."],
            305 => ["code" => "TRAINEES", "name" => "Trainees"],
            306 => ["code" => "VENDEDOR", "name" => "Vendedor"],
            307 => ["code" => "VENDEDOR_PRACISTA", "name" => "Vendedor Pracista"],
            308 => ["code" => "VEREADOR", "name" => "Vereador"],
            309 => ["code" => "VETERINARIO", "name" => "Veterinario"],
            310 => ["code" => "VIDRACEIRO", "name" => "Vidraceiro"],
            311 => ["code" => "WEBDESIGNER", "name" => "Webdesigner"],
            312 => ["code" => "ZOOTECNISTA", "name" => "Zootecnista"]
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_filter($list, function ($value) use ($key) {
                if ($value["code"] == $key) {
                    return $value;
                }
                return false;
            });
        }

        return false;
    }

    public static function realState(int|string|null $key): string
    {
        $list = [
            0 => "house",
            1 => "apartment",
            2 => "commercial",
            3 => "land",
            4 => "others"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function product(int|string|null $key): string
    {
        $list = [
            0 => "LOAN",
            1 => "CARD",
            2 => "REFINANCING_AUTO",
            3 => "REFINANCING_HOME",
            4 => "FINANCING_AUTO",
            5 => "CAAS",
            6 => "WORKING_CAPITAL",
            7 => "DEBT"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function network(int|string|null $key): string
    {
        $list = [
            0 => "VISA",
            1 => "MASTERCARD",
            2 => "ELO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function nationality(int|string|null $key): string
    {
        $list = [
            0 => "BRASILEIRO",
            1 => "ESTRANGEIRO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function mime(int|string|null $key): string
    {
        $list = [
            0 => "image/jpeg",
            1 => "image/png",
            2 => "application/pdf"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function gender(int|string|null $key): string
    {
        $list = [
            0 => "MASCULINO",
            1 => "FEMININO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function states(int|string|null $key): string
    {
        $list = [
            0 => 'AC',
            1 => 'AL',
            2 => 'AP',
            3 => 'AM',
            4 => 'BA',
            5 => 'CE',
            6 => 'DF',
            7 => 'ES',
            8 => 'GO',
            9 => 'MA',
            10 => 'MT',
            11 => 'MS',
            12 => 'MG',
            13 => 'PA',
            14 => 'PB',
            15 => 'PR',
            16 => 'PE',
            17 => 'PI',
            18 => 'RN',
            19 => 'RS',
            20 => 'RJ',
            21 => 'RO',
            22 => 'RR',
            23 => 'SC',
            24 => 'SP',
            25 => 'SE',
            26 => 'TO'
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function identityIssuer(int|string|null $key): string
    {
        $list = [
            0 => "SSP",
            1 => "DETRAN",
            2 => "CONS_REG_ECONOMIA",
            3 => "MIN_EXERCITO",
            4 => "OAB",
            5 => "CREA",
            6 => "SJS",
            7 => "CTPS",
            8 => "CREME",
            9 => "MINEX",
            10 => "CRM",
            11 => "SJTC",
            12 => "MAER",
            13 => "DPF",
            14 => "RBF",
            15 => "IML",
            16 => "CPROF",
            17 => "CRO",
            18 => "CRC",
            19 => "DPMAF",
            20 => "ME",
            21 => "BM",
            22 => "AERON",
            23 => "SJT",
            24 => "COREN",
            25 => "DETRA",
            26 => "EXERC",
            27 => "SSI",
            28 => "MINISTERIO_DA_MARINHA",
            29 => "CRA_CONSELHO_ADMINISTRATIVO",
            30 => "INSTITUTO_FELIX_PACHECO",
            31 => "INST_NAC_PROPRIEDADE_INDUSTRIA",
            32 => "MINISTERIO_DA_FAZENDA",
            33 => "TRIBUNAL_REGIONAL_DO_TRABALHO",
            34 => "CONSELHO_REGIONAL_PSICOLOGIA",
            35 => "POLICIA_MILITAR"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function creditStatus(int|string|null $key): string
    {
        $list = [
            0 => "PRE_PROCESSAMENTO",
            1 => "PRE_APROVADO",
            2 => "PENDENTE",
            3 => "AGUARDANDO_DOCUMENTOS",
            4 => "EM_ANALISE_MANUAL",
            5 => "EM_ANALISE_OPERACIONAL",
            6 => "EM_ANALISE_DOCUMENTAL",
            7 => "CONTRATADO",
            8 => "LIBERADO",
            9 => "REPROVADO",
            10 => "ESTORNO",
            11 => "EXPIRADO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function pipelineStatus(int|string|null $key): string
    {
        $list = [
            0 => "SIGNUP_ANALISIS",
            1 => "SIGNUP_COMPLETED",
            2 => "SIGNUP_DENIED",
            3 => "PROPOSAL_ANALISIS",
            4 => "PROPOSAL_CREATED",
            5 => "PROPOSAL_DENIED"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function account(int|string|null $key): string
    {
        $list = [
            0 => "CONTA_CORRENTE_INDIVIDUAL",
            1 => "CONTA_CORRENTE_CONJUNTA",
            2 => "CONTA_POUPANCA_CONJUNTA",
            3 => "CONTA_POUPANCA_INDIVIDUAL"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function employmentSince(int|string|null $key): string
    {
        $list = [
            0 => "LESS_THAN_SIX_MONTHS",
            1 => "BETWEEN_SIX_MONTHS_AND_ONE_YEAR",
            2 => "BETWEEN_ONE_AND_TWO_YEARS",
            3 => "BETWEEN_TWO_AND_THREE_YEARS",
            4 => "BETWEEN_THREE_AND_FOUR_YEARS",
            5 => "BETWEEN_FOUR_AND_FIVE_YEARS",
            6 => "BETWEEN_FIVE_AND_TEN_YEARS",
            7 => "MORE_THAN_TEN_YEARS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function homeSince(int|string|null $key): string
    {
        $list = [
            0 => "MENOR_6_MESES",
            1 => "MENOR_1_ANO",
            2 => "MENOR_2_ANOS",
            3 => "MAIOR_2_ANOS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function home(int|string|null $key): string
    {
        $list = [
            0 => "ALUGADA",
            1 => "PARENTES",
            2 => "FUNCIONAL",
            3 => "PROPRIA_QUITADA",
            4 => "PROPRIA_FINANCIADA",
            5 => "OUTROS"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function occupation(int|string|null $key): string
    {
        $list = [
            0 => "APOSENTADO_PENSIONISTA",
            1 => "AUTONOMO",
            2 => "EMPRESARIO",
            3 => "PROFISSIONAL_LIBERAL",
            4 => "ASSALARIADO",
            5 => "FUNCIONARIO_PUBLICO",
            6 => "DESEMPREGADO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function education(int|string|null $key): string
    {
        $list = [
            0 => "NAO_ALFABETIZADO",
            1 => "ENSINO_FUNDAMENTAL_INCOMPLETO",
            2 => "ENSINO_FUNDAMENTAL_COMPLETO",
            3 => "ENSINO_MEDIO_INCOMPLETO",
            4 => "ENSINO_MEDIO_COMPLETO",
            5 => "ENSINO_SUPERIOR_INCOMPLETO",
            6 => "ENSINO_SUPERIOR_COMPLETO",
            7 => "POS_GRADUACAO"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }

    public static function relationshipStatus(int|string|null $key): string
    {
        $list = [
            0 => "SOLTEIRO",
            1 => "CASADO",
            2 => "DIVORCADO",
            3 => "SEPARADO",
            4 => "VIUVO",
            5 => "SOLTEIRO",
            6 => "OUTROS",
            7 => "COMPANHEIRO",
            8 => "UNIAO_ESTAVEL",
            9 => "SEPARADO_JUDICIALMENTE"
        ];

        if (isset($key)) {
            return is_int($key) ? $list[$key] : array_flip($list)[$key];
        }

        return false;
    }
}
