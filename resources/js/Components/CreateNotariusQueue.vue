<template>
    <div class="container ">
        <div class="row w-100">
            <div class="col-lg-6 mx-auto">
                <h1 class="text-center">Notarius Queue</h1>
                <form :action="url" method="POST">
                    <input type="hidden" name="_token" :value="csrf_token">
                    <div class="form-group mb-2">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control"
                               v-model="initForm.first_name"
                               :class="{'is-invalid': errors.first_name}" name="first_name">

                        <small class="text-danger" v-if="errors.first_name">
                            <span v-for="error in errors.first_name">{{ error }}</span>
                        </small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control"
                               v-model="initForm.last_name"
                               :class="{'is-invalid': errors.last_name}"
                               name="last_name">

                        <small class="text-danger" v-if="errors.last_name">
                            <span v-for="error in errors.last_name">{{ error }}</span>
                        </small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"
                               v-model="initForm.email"
                               :class="{'is-invalid': errors.email}" name="email">

                        <small class="text-danger" v-if="errors.email">
                            <span v-for="error in errors.email">{{ error }}</span>
                        </small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="date">Date</label>
                        <input type="datetime-local"
                               v-model="initForm.date"
                               class="form-control" :class="{'is-invalid': errors.date}"
                               name="date">

                        <small class="text-danger" v-if="errors.date">
                            <span v-for="error in errors.date">{{ error }}</span>
                        </small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="service_type">Service Type</label>
                        <select v-model="initForm.service_type" name="service_type" id="service_type" class="form-control"
                                :class="{'is-invalid': errors.service_type}">
                            <option value="">Choose...</option>
                            <option :value="key" v-for="(item, key ) in serviceTypes">{{ item }}</option>
                        </select>

                        <small class="text-danger" v-if="errors.service_type">
                            <span v-for="error in errors.service_type">{{ error }}</span>
                        </small>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary btn-lg px-5">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['serviceType', 'url', 'csrf_token', 'errors', 'initForm'],
    setup(props) {
        const initForm = props.initForm
        const serviceTypes = props.serviceType
        const errors = props.errors
        return {serviceTypes, errors}
    }
}
</script>

<style scoped>

</style>
