<template>
  <div class="table-responsive">
    <table :id="'table-' + child.slug" class="table table-bordered table-hover table-stripped">
      <caption>Tất cả các đơn hàng {{ child.title }}</caption>
      <thead>
        <tr>
          <th>Ngành nghề</th>
          <th>Mức lương</th>
          <th>Ngày phỏng vấn</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="post in child.posts" v-if="post.slug != ''">
          <td>
            <a :href="pSlug + '/' + child.slug + '/' + post.slug"><h6>{{ post.title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
            <p v-if="post.type == 1" style="margin: 15px 0px 5px;font-size: 12px;">
                <i class="fa fa-map-marker"></i> {{ post.field.work_place }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ post.field.expired }}
            </p>
          </td>
          <td>
            <div v-if="post.type == 1">
              {{ post.field.income | currency }}
            </div>
            <div v-else>
              aaa
            </div>
          </td>
          <td>
            <div v-if="post.type == 1">
              {{ post.field.interview }}
            </div>
            <div v-else>
              aaa
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import 'datatables.net-bs4/css/dataTables.bootstrap4.min.css'
import 'datatables.net-bs4/js/dataTables.bootstrap4.min.js'
export default {

  name: 'Post',

  props: {
    child: {
      type: Object
    },
    pSlug: {
      type: String
    }
  },

  data () {
    return {
      posts: []
    }
  },

  filters: {
    currency(number) {
      return (new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND'})).format(number);
    }
  },

  mounted() {

    $('#table-' + this.child.slug).dataTable({
      order: [[2, 'asc']]
    });
  },

  methods: {
    postUrl(pS, s) {
      return ``;
    }
  }
}
</script>

<style lang="css" scoped>
</style>