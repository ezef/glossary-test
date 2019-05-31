@extends('layouts.app')
@section('title','Glossaries')
@section('content')
<div class="row" id="glossary-vue">

<div id="new-glossary" class="modal fade" role="dialog">
   <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">new Glossary</h4>
         </div>
         <div class="modal-body">
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Glossary Name</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.name" class="form-control" name="name" placeholder="Name..." type="text" autocomplete="off" required>
                  </div>
              </div>
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Language</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.lang" class="form-control" name="lang" placeholder="Language of the Glossary..." type="text" autocomplete="off" required>
                  </div>
              </div>
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 1</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.terms[0]" class="form-control" type="text" autocomplete="off" required>
                  </div>
              </div>                            
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 2</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.terms[1]" class="form-control"  type="text" autocomplete="off" required>
                  </div>
              </div>                            
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 3</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.terms[2]" class="form-control" type="text" autocomplete="off" required>
                  </div>
              </div>                            
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 4</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.terms[3]" class="form-control"  type="text" autocomplete="off" >
                  </div>
              </div>                            
              <div class="form-group clearfix">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Term 5</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input v-model="newGlossary.terms[4]" class="form-control" type="text" autocomplete="off" >
                  </div>
              </div>
         </div>
         <div class="modal-footer">
            <div class="row">
               <div class="col-sm-6">
               </div>
               <div class="col-sm-6">
                  <button @click.prevent="createGlossary()" class="btn btn-primary btn-lg submit pull-right" >Create</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <div class="row form-group">
                  <div class="form-group clearfix">
                        <button type="button" class="btn btn-default btn-md pull-right" data-toggle="modal" data-target="#new-glossary">New glossary</button>
                      </div>
                    <div class="table-responsive col-sm-12">
                        <table id="glossaries" class="table table-striped jambo_table">
                            <thead>
                              <tr class="headings">
                                <th>Name</th>
                                <th>Action</th>
                              </tr> 
                            </thead>
                            <tbody>

                              <tr v-for="glossary in glossaries" class="pointer">
                                <td>@{{ glossary.name }}</td>
                                <td><button class="btn btn-default btn-sm" v-on:click="showTerms(glossary)">View Terms</button></td>
                              </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
const glossaryVue = new Vue({
    el: '#glossary-vue',
    data: {
        glossaries: [],
        formErrors: {},
        formErrorsUpdate: {},
        newGlossary:{terms:[]},

    },
    mounted: function() {
        this.getGlossaries();
    },
    methods: {
        getGlossaries: function() {
            this.$http.get('/glossary').then((response) => {
                this.glossaries = response.body;
            });
        },
        showTerms: function(glossary) {
          console.log(glossary.name)
          window.location.href = "term/"+glossary.id;
        },
        createGlossary: function() {
          console.log(this.newGlossary)
          this.$http.post('/glossary',this.newGlossary).then((response) => {
            console.log(response);
          $("#new-glossary").modal('hide');
        }, (response) => {
          console.log(response);
        });


        },
    }
});
</script>
@endsection
