<template>
    <div>
        <b-navbar variant="info" type="dark" >
            <b-navbar-brand href="#" class="mb-0 ms-3">BootstrapVue</b-navbar-brand>
        </b-navbar>
        <b-container fluid>
            <br>
        <b-card class="text-center">
            <div>
                <b-container class="text-center" style="display:flex; justify-content:center;">

                    
                    <b-img block v-bind="mainProps" rounded="circle" src="file2" ></b-img>
                    <div class="my-5 ms-5">
                        <b-row>
                        <b-form-file 
                            accept="image/jpeg, image/png, image/gif" 
                            v-model="file2" 
                            class="mt-3" 
                            plain @change="carregaImagem($event)">
                        </b-form-file>
                    </b-row>
                    </div>
                    
                </b-container>
            <b-row class="my-5 ms-5" >
                
                <b-col sm="3">
                    <label for="nome">Nome:</label>
                </b-col>
                <b-col sm="6">
                    <b-form-input type="text" v-model="nome" placeholder="Nome completo"></b-form-input>
                    <br>
                </b-col>

                <div></div>
                <b-col sm="3">
                    <label for="cpf">CPF:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="cpf" placeholder="CPF"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">
                    <label for="rg">RG:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="rg" placeholder="rg"></b-form-input>
                    <br>
                </b-col>
                <br>

                <div></div>
                <b-col sm="3">
                    <label for="nome_mae">Nome Mãe:</label>
                </b-col>
                <b-col sm="6">
                    <b-form-input v-model="nome_mae" placeholder="Nome Mãe"></b-form-input>
                    <br>
                </b-col>

                <div></div>
                <b-col sm="3">
                    <label for="nome_pai">Nome Pai:</label>
                </b-col>
                <b-col sm="6">
                    <b-form-input v-model="nome_pai" placeholder="Nome Pai"></b-form-input>
                    <br>
                </b-col>
                <hr>

                <b-col sm="3">
                    <label for="email">E-mail:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="email" placeholder="E-mail"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">
                    <label for="telefone">Telefone:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="telefone" placeholder="Telefone"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">
                    <label for="cep">CEP:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="cep" placeholder="CEP"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">
                    <label for="logradouro">Logradouro:</label>
                </b-col>
                <b-col sm="6">
                    <b-form-input v-model="logradouro" placeholder="Logradouro"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">  
                    <label for="estado">Estado:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="estado" placeholder="Estado"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">  
                    <label for="cidade">cidade:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="cidade" placeholder="cidade"></b-form-input>
                    <br>
                </b-col>
                <div></div>
                
                <b-col sm="3">     
                    <label for="bairro">Bairro:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="bairro" placeholder="Bairro"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">   
                    <label for="numero">Numero:</label>
                </b-col>
                <b-col sm="3">
                    <b-form-input v-model="numero" placeholder="Numero"></b-form-input>
                    <br>
                </b-col>
                <div></div>

                <b-col sm="3">
                    <label for="complemento">Complemento:</label>
                </b-col>
                <b-col sm="6">
                    <b-form-input v-model="complemento" placeholder="Complemento"></b-form-input>
                    <br>
                </b-col>
            </b-row>
            </div>
            <b-button variant="success" @click="salvar()">Button</b-button>
        </b-card>
        </b-container>
    </div>
</template>
<script>
    export default {
      props:['teste', 'formulario'],
    data() {
      return {
        urlBase:'http://127.0.0.1:8000/api/salva_dados',
        nome: '', cpf:'', rg:'', nome_mae:'', nome_pai:'', email:'', telefone:'', cep:'',
        logradouro:'', estado:'', cidade:'', bairro:'', numero:'', complemento:'',file2:[],
        mainProps: { blank: true, blankColor: '#777', width: 125, height: 125, class: 'm1' }
      }
      
    },
    methods: {
        carregaImagem(e) {
            this.file2 = e.target.files
        },
        salvar() {
            formData.append('nome', this.nome)
            formData.append('cpf', this.cpf)
            formData.append('rg', this.rg)
            formData.append('nome_mae', this.nome_mae)
            formData.append('nome_pai', this.nome_pai)
            formData.append('email', this.email)
            formData.append('telefone', this.telefone)
            formData.append('cep', this.cep)
            formData.append('logradouro', this.logradouro)
            formData.append('estado', this.estado)
            formData.append('cidade', this.cidade)
            formData.append('bairro', this.bairro)
            formData.append('numero', this.nome)
            formData.append('nome', this.numero)
            formData.append('complemento', this.complemento)
            formData.append('file2', this.file2)
            let config = {
                headers: {
                    'Content-type': 'multipart/form-data',
                    'accept': 'application/json'
                }
            }
            axios.post(this.urlBase, formData, config)
                .then(response => {
                    console.log(response)
                })
                .then(errors => {
                    console.log(errors)
                })
        }
    }
    }
</script>