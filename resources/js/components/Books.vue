<template>
  <div>
    <div v-for="book in books" :key="book.id">
      <p>
        {{ book.title }}
        <br>

        {{ book.author }}
      </p>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      books: [],
      endpoint: "api/books"
    };
  },

  created() {
    this.fetch();
  },

  methods: {
    fetch() {
      axios.get(this.endpoint).then(({ data }) => {
        this.books = data.data;
      });
    }
  }
};
</script>
