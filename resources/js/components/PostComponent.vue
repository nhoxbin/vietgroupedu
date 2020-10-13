<template>
  <div class="table-responsive">
    <table :id="'table-' + child.slug" class="table table-bordered table-hover table-stripped">
      <caption>Tất cả các đơn hàng {{ child.title }}</caption>
      <thead>
        <tr v-if="isOrderPost">
          <th>Tiêu đề</th>
          <th>Mức lương</th>
          <th>Ngày phỏng vấn</th>
        </tr>
        <tr v-else>
          <th>Tiêu đề</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr v-for="post in child.posts" v-if="post.slug != ''">
          <td>
            <a :href="slug()"><h6>{{ post.title }}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
            <p v-if="post.type == 1" style="margin: 15px 0px 5px;font-size: 12px;">
                <i class="fa fa-map-marker"></i> {{ post.field.work_place }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ post.field.expired }}
            </p>
          </td>
          <td>
            <div>
              {{ post.field.income | currency }}
            </div>
            <div>
              aaa
            </div>
          </td>
          <td>
            <div>
              {{ post.field.interview }}
            </div>
            <div>
              aaa
            </div>
          </td>
        </tr> -->
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
      isOrderPost: this.child.posts[0] ? (this.child.posts[0].type == 1 ? true : false) : false,
      posts: []
    }
  },

  filters: {
    currency(number) {
      return (new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND'})).format(number);
    }
  },

  mounted() {
    var orderColumns = null, otherColumns = null;
    var columnDefs = null, columns = null;
    var data = null;
    if (this.child.posts[0]) {
      if (this.child.posts[0].type == 1) {
        data = this.child.posts.map(post => [ post.title, post.field.income, post.field.interview ]);
      } else {
        data = this.child.posts;
      }
    }
    $('#table-' + this.child.slug).dataTable({
      order: [],
      columnDefs: [{
        targets: 0,
        data: ( row, type, val, meta ) => {
          var td = `<a :href="`${this.slug()}`"><h6>${row[0]}<img src="/app/img/posts/new.gif" alt="New"></h6></a>
            <p style="margin: 15px 0px 5px;font-size: 12px;">
                <i class="fa fa-map-marker"></i> {{ post.field.work_place }} | Hạn nộp hồ sơ: <i class="fa fa-calendar"></i> {{ post.field.expired }}
            </p>`;
          return td;
        }
      }],
      data: data
    });
  },

  methods: {

    slug() {
      return this.pSlug ? (this.pSlug + '/' + child.slug + '/' + post.slug) : null;
    }
  }
}
</script>

<style lang="css" scoped>
</style>