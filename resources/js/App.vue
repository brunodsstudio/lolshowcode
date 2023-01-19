<template>
    <div>
        <br/><br/>
        <h4><b>Total Geral: R$ {{ total.toFixed(2) }}</b></h4>
        <hr/>
        <div class="col-sm-9">
            <div class="col-sm-4">
                    <h4>Escolha seu Plano</h4>
                    <select v-model="selected" v-on:select="calculaMinutos">
                        <option v-for="option in options" :value="option.time">
                            {{ option.nome }}
                        </option>
                    </select>
            </div>
            <hr/>
            <div class="col-sm-4">
                <h4>Destino</h4>
                <table class="table">
                    <thead>
                    <tr><th scope="col">Escolha</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Valor</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="it in items">
                        <td><input type="radio" name="escolha" v-on:change="calculaMinutos" v-bind:value="it.valor" v-model="radiopck" /></td>
                        <td>{{it.origem}}</td>
                        <td>{{it.destino}}</td>
                        <td>{{it.valor}}</td>
                        
                    </tr>
                    </tbody>
                </table>
            </div>


            <hr />
            <div class="col-sm-12">
                <label for="customRange1" class="form-label">Tempo de Uso</label>
                <div class="row">
                    <div class="col-sm-9">
                        <input type="range" class="form-range" id="customRange1" min="0" max="200" v-on:change="calculaMinutos" v-model="range" :disabled="computedCondition" >
                    </div>
                    <div class="col-sm-3"> 
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0" v-model="range">
                    </div>          
                </div>  
                
            </div>
        </div>
    </div>
</template>

<script>
import "./bootstrap"

export default {
    name: "app",
    data() {
        return {
            fields: ['Origem', 'Destino', 'Valor'],
            items: [],
            range:0,
            selected : 0,
            radiopck:0,
            options:[
                {nome: 'Sem fale Mais', time:0},
                {nome: 'Fale Mais 30', time:30},
                {nome: 'Fale Mais 60', time:60},
                {nome: 'Fale Mais 120', time:120},
            ],
            computedCondition :true,
            total:0,
        }
    },methods:{
        
        calculaMinutos: function(){

            if(this.radiopck ==0 ){
                this.computedCondition = true;
                
            } else {
                this.computedCondition = false;
            }

            if(this.selected == 0){
                this.total = this.radiopck * this.range

            } else {

                if(this.range < this.selected){
                     this.total = 0
                } else {  
                    this.total = (this.range - this.selected)*this.radiopck
                    this.total += ( this.total/100)*10
                }
            }
            
        },
        

    },
    async created() {
        try {
            const res = await axios.get(`/api/ddds/`);
            
            const items= [];
            let ob = Object.values(res.data);
            ob.forEach(function(obj) {
                obj.forEach(function(it) {         
                    items.push({origem: it.origem,destino:it.destino, valor:it.valor})
                })
            })

            this.items = items;
            
           
        } catch (error) {
            console.log(error);
        }


    },computed() {
        calculaMinutos()

    }
};

</script>