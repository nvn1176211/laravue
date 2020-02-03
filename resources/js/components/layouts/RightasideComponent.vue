<template>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs d-none">
            <li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fas fa-cogs"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Settings tab content -->
            <div class="tab-pane active" id="control-sidebar-settings-tab">
                <h3 class="control-sidebar-heading mt-0">General Settings</h3>
                <div class="form-group">
                    <label>Languages</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Vietnamese</option>
                        <option>English</option>
                    </select>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
</template>

<script>
    export default {
        name: 'layoutRightaside',
    }
</script>
