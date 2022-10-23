<template>
    <div class="container mt-3" v-if="queueList && queueList.length > 0">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start"
                        v-for="queue in queueList">
                        <div class="d-flex flex-column">
                            <h4 class="mb-0">{{ queue.fullName}}</h4>
                            <small>{{ queue.date}}</small>
                        </div>
                        <div>
                            {{ serviceTypes[queue.service_type] }}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['list', 'serviceType'],
    setup(props) {
        const queueList = props.list
        const serviceTypes = props.serviceType
        return { queueList, serviceTypes}
    }
}
</script>

<style scoped>

</style>
