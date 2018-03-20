<?php
/**
 * Created by PhpStorm.
 * User: wanghaibo
 * Date: 18/3/20
 * Time: 16:01
 */

class Core
{
    public function __construct($lib_root)
    {
        while (!$this->feature_name){
            echo "请输入功能名称:(eg:Category)\n";
            $this->feature_name = trim(fgets(STDIN));
        }
        $this->uc_feature_name = ucfirst($this->feature_name);
        $this->lower_feautre_name = strtolower($this->feature_name);
        $this->lib_root = $lib_root;
    }
    public function run(){
        for($i=1;$i<8;$i++){
            $this->generate($i);
        }
        $this->generate_routes();
        $this->generate_install_list();
    }
    private function generate($type){
        $uc_feature_name = $this->uc_feature_name;
        $lib_root = $this->lib_root;
        switch ($type){
            case 1:
                $filename = CONTROLLER_ROOT.'/'.$uc_feature_name.'Controller.php';
                $str = file_get_contents($lib_root.'/resources/controller.resources');
                break;
            case 2:
                $filename = DATATABLE_ROOT.'/'.$uc_feature_name.'DataTable.php';
                $str = file_get_contents($lib_root.'/resources/datatable.resources');
                break;
            case 3:
                $filename = REQUEST_ROOT.'/'.$uc_feature_name.'Request.php';
                $str = file_get_contents($lib_root.'/resources/request.resources');
                break;
            case 4:
                $filename = MODEL_ROOT.'/'.$uc_feature_name.'.php';
                $str = file_get_contents($lib_root.'/resources/model.resources');
                break;
            case 5:
                $filename = SERVICE_ROOT.'/'.$uc_feature_name.'Service.php';
                $str = file_get_contents($lib_root.'/resources/service.resources');
                break;
            case 6:
                $filename = REPOSITORY_ROOT.'/'.$uc_feature_name.'Repository.php';
                $str = file_get_contents($lib_root.'/resources/repository.resources');
                break;
            case 7:
                $this->create_views();
                return true;
                break;
            default:
                return false;
                break;
        }
        if(!file_exists($filename)){
            $this->str_replace_plus($str);
            $this->write_file($str,$filename);
            return true;
        }
    }
    private function generate_routes(){
        $route_file = './routes/generate_admin.php';
        $routes = file_get_contents($this->lib_root.'/resources/route.resources');
        if(file_exists($route_file) && is_file($route_file)){
            $routes = file_get_contents($route_file)."\n".$routes;
        }else{
            $routes = "<?php\n".$routes;
        }
        $this->str_replace_plus($routes);
        $this->write_file($routes,$route_file);
    }

    private function generate_install_list(){
        $lists_file = './feature_lists.php';
        if(!file_exists($lists_file) || !is_file($lists_file)){
            $lists = [$this->uc_feature_name];
        }else{
            $lists = include $lists_file;
            $lists = array_merge($lists,[$this->uc_feature_name]);
        }
        file_put_contents('./feature_lists.php',"<?php\nreturn ".var_export($lists,true).';');
    }

    private function unistall_features(){
        //TODO::卸载功能（仅限自动生成的）
    }
    private function create_views(){
        $lower_feautre_name = $this->lower_feautre_name;
        $lib_root = $this->lib_root;
        $path = $lib_root.'/resources/views';
        $items = scandir($path);
        if(count($items)>2){
            array_shift($items);
            array_shift($items);
        }
        foreach ($items as $item){
            if($item){
                $filepath = $path.'/'.$item;
                $str = file_get_contents($filepath);
                $filename = RESOURCE_ROOT.'/'.$lower_feautre_name.'/'.$item;
                $this->str_replace_plus($str);
                $this->write_file($str,$filename);
            }else{
                continue;
            }
        }
    }

    private function write_file($str,$filename){
        $dir = explode('/',$filename);
        array_pop($dir);
        $dir = join('/',$dir);
        if(is_dir($dir)){
            if(!is_writeable(CONTROLLER_ROOT)){
                chmod(CONTROLLER_ROOT,'0744');
            }
        }else{
            mkdir($dir,0744,true);
        }
        file_put_contents($filename,$str);
    }

    private function str_replace_plus(&$str){
        $uc_feature_name = $this->uc_feature_name;
        $lower_feautre_name = $this->lower_feautre_name;
        $str = str_replace('{FEATURE_NAME_UC}',$uc_feature_name,$str);//替换控制器名称
        $str = str_replace('{FEATURE_NAME_L}',$lower_feautre_name,$str);//替换控制器名称
        $str = str_replace('{PERMISSSION}',$lower_feautre_name,$str);
    }


}