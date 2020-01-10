<template>
    <div class="container">

    <table>
        <th>
            <td>ID</td>
            <td>Title</td>
            <td>Body</td>
            <td>Action</td>

        </th>
        <tr v-for="article in articles" :key="article.id">
            <td>{{ article.id }}</td>
            <td>{{ article.title }}</td>
            <td>{{ article.body }}</td>
            <td>
                    Edit
            </td>
            
        </tr>

    </table>   
        

    
       
  </table>
       


    </div>
</template>

<script>
    export default {
        
        data() {
            return {
                articles: null
            }
        },
        mounted() {
        axios.get('http://localhost/blog/articles/')
          .then(response => {
                this.articles = response.data;
          });
        }
    }
</script>