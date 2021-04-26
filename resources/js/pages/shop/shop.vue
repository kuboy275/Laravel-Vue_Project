<template>
  <div class="mb-5 pb-5">
    <banner v-bind:title="title" />
    <div class="shop my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 side-bar mb-5">
            <div class="row justify-content-between align-items-center">
              <!-- TOTAL PRODUCTS -->
              <div class="col-lg-5 info" v-if="pagination.total != 0">
                Tổng số
                <span> {{ pagination.total }} </span>
                sản phẩm trong
                <span>{{ pagination.last_page }}</span> trang
              </div>
              <div class="col-lg-5" v-else>khong co san pham</div>
              <!-- SEARCH PRODUCTS  -->
              <div class="col-lg-5 search text-right">
                <input
                  class="form-control"
                  type="text"
                  placeholder="Search products and price"
                  v-model="query"
                  @keyup="searchProducts"
                />
              </div>
              <!-- SORT PRICE  -->
              <div class="col-lg-2 text-right sort">
                <div class="dropdown">
                  <button
                    class="btn btn-primary dropdown-toggle"
                    type="button"
                    id="dropdownMenuButton"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    Shorting by
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" @click.prevent="sortLowest"
                      >Sort Lowes</a
                    >
                    <a class="dropdown-item" href="#" @click.prevent="sortHighest"
                      >Sort Highest</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOR PRODUCTS -->
          <div
            class="col-lg-4 col-md-3 col-sm-6 col-12 mb-5"
            v-for="product in products"
            :key="product.id"
          >
            <div class="item">
              <img v-lazy="product.feature_img_path" alt="shop-item" width="100%" />
              <div class="content p-4">
                <span> {{ product.price | formatNumber }} $ </span>
                <h2>{{ product.name }}</h2>
                <router-link
                  :to="{ name: 'shop-detail', params: { id: product.id } }"
                  class="btn"
                >
                  View car detail
                  <i class="fas fa-angle-double-right"></i>
                </router-link>
              </div>
            </div>
          </div>
        </div>
        <!-- PAGINATION -->
        <ul class="pagination justify-content-center" v-if="pagination.last_page !== 1">
          <!-- first url -->
          <li class="page-item">
            <a
              href="#"
              class="page-link"
              @click.prevent="fetchProducts(pagination.first_page_url)"
            >
              <i class="fas fa-angle-double-left"></i>
            </a>
          </li>
          <!-- end -->
          <!-- prev url -->
          <li :class="['page-item ', pagination.prev_page_url ? '' : 'disabled']">
            <a
              class="page-link"
              @click.prevent="fetchProducts(pagination.prev_page_url)"
              href="#"
              tabindex="-1"
              ><i class="fas fa-angle-left"></i
            ></a>
          </li>
          <!-- end -->

          <!-- number paginate -->
          <li class="page-item" v-for="link in links" :key="link.label">
            <a
              :class="['page-link', link.active == true ? 'active' : '']"
              href="#"
              @click.prevent="fetchProducts(link.url)"
            >
              {{ link.label }}
            </a>
          </li>
          <!-- end -->
          <!-- next url -->
          <li :class="['page-item', pagination.next_page_url ? '' : 'disabled']">
            <a
              class="page-link"
              @click.prevent="fetchProducts(pagination.next_page_url)"
              href="#"
              ><i class="fas fa-angle-right"></i
            ></a>
          </li>
          <!-- end -->
          <!-- last url -->
          <li class="page-item">
            <a
              href="#"
              class="page-link"
              @click.prevent="fetchProducts(pagination.last_page_url)"
            >
              <i class="fas fa-angle-double-right"></i>
            </a>
          </li>
          <!-- end -->
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import Banner from "@/components/Banner";

export default {
  components: {
    Banner,
  },
  data() {
    return {
      title: "Shop",
      products: [],
      pagination: {},
      links: [],
      query: "",
    };
  },

  created() {
    this.fetchProducts();
  },

  methods: {
    searchProducts() {
      axios
        .post("/api/products/search?query=" + this.query)
        .then((response) => {
          this.products = response.data.data.data;
          this.makePagination(response.data.data);
        })
        .catch((error) => {
          console.log(error);
        });
    },

    fetchProducts(page_url) {
      let vm = this;
      page_url = page_url || "/api/products/index";
      axios.get(page_url).then((response) => {
        this.products = response.data.data.data;
        this.makePagination(response.data.data);
      });
    },
    makePagination(data) {
      let paginate = {
        current_page: data.current_page,
        last_page: data.last_page,
        next_page_url: data.next_page_url,
        prev_page_url: data.prev_page_url,
        per_page: data.per_page,
        total: data.total,
        first_page_url: data.first_page_url,
        last_page_url: data.last_page_url,
      };
      this.pagination = paginate;
      const arrLink = data.links;
      arrLink.pop();
      arrLink.shift();
      this.links = arrLink;
    },

    sortLowest() {
      this.products.sort(function (a, b) {
        return a.price - b.price;
      });
    },
    sortHighest() {
      this.products.sort(function (a, b) {
        return b.price - a.price;
      });
    },
  },
};
</script>

<style scoped>
.shop .item {
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  border-radius: 10px;
  cursor: pointer;
}
.shop .item:hover {
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
    rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
  transform: translateY(-10px);
  transition: all 0.6s ease-in;
}
.shop .item img {
  border-radius: 10px 10px 0 0;
  object-fit: cover;
  height: 250px;
}
.shop .item .content span {
  display: block;
  position: absolute;
  top: 57%;
  border-radius: 5px;
  background-color: #0988ff;
  padding: 10px 15px;
  font-size: 16px;
  color: #ffffff;
  font-weight: 700;
}
.shop .item .content h2 {
  margin-top: 15px;
  font-size: 22px;
  letter-spacing: -1px;
  line-height: 35px;
  color: #232628;
  font-weight: 700;
}
.shop .item .content a {
  font-size: 14px;
  line-height: 28px;
  color: #ffffff;
  font-weight: 700;
  border-radius: 5px;
  background-color: #0988ff;
}

.shop .item .content a i {
  margin-left: 5px;
  transform: translateY(5%);
}

/* paginate */
.pagination {
  margin-top: 50px;
}
.pagination .page-item a {
  margin: 0 15px;
  border-radius: 50%;
  padding: 0;
  width: 50px;
  height: 50px;
  text-align: center;
  line-height: 45px;
  font-size: 20px;
  color: #a59b9b;
  font-weight: 700;
  border: 2px solid #a59b9b;
  box-shadow: rgba(50, 50, 105, 0.15) 0px 2px 5px 0px, rgba(0, 0, 0, 0.05) 0px 1px 1px 0px;
}
.pagination .page-item a:hover,
.pagination .page-item .active {
  background: #0988ff;
  color: white;
  transition: all 0.5s ease;
  border: 2px solid #0988ff;
}

.pagination .page-item a:focus {
  box-shadow: none;
}

.info {
  color: #555555;
  font-size: 18px;
}
.info span {
  color: #0988ff;
  font-weight: 600;
}
</style>
