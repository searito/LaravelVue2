/*
var urlUsers = 'https://randomuser.me/api/?results=10';

new Vue({
    el: '#main',
    created: function() {
        this.getUsers();
    },
    data: {
        lists: []
    },
    methods: {
        getUsers: function() {
            axios.get(urlUsers).then(response => {
                this.lists = response.data.results
            });
        }
    }
});
*/

new Vue({
    el: '#crud',
    created: function() {
        this.getKeeps();
    },
    data: {
        keeps: [] //TAREAS QUE TENGO EN LA BD
    },
    methods: {
        // OBTENER TAREAS
        getKeeps: function() {
            var urlKeeps = 'tareas';
            axios.get(urlKeeps).then(response => {
                this.keeps = response.data;
            });
        },

        // ELIMINAR TAREAS
        deleteKeep: function(keep) {
            var url = "tareas/" + keep.id;
            // AXIOS, METODO DE LA URL
            axios.delete(url).then(response => {
                this.getKeeps();
                // NOTIFICACION DE ELEMENTO ELIMINADO
                toastr.success("Registro Eliminado Correctamente");
            });
        }
    }
});