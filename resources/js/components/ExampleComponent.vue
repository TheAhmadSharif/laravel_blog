<template>
    <div class="container">


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books" :key="book.id">
                <td>{{ book.id }}</td>
                <td>{{ book.title }}</td>
                
            </tr>
            </tbody>
        </table>


    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('http://localhost/blog/articles/')
                .then(response => {
                    this.books = response.data;
                });


        },
        data() {
            return {
                books: []
            }
        }
    }
</script>