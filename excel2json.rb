# encoding: UTF-8
puts `clear`

require 'rubygems'

require 'fileutils'
require 'cocaine'
require 'json'

ROOT_PATH      = File.dirname File.absolute_path(__FILE__)
READER_SCRIPT  = ROOT_PATH + "/converter/excel2json_base.php"
SRC_EXCEL_PATH = ROOT_PATH + "/files/excel_import.xlsx"
TMP_DATA_PATH  = ROOT_PATH + "/files/tmp.json"

FileUtils.rm(TMP_DATA_PATH, force: true)

line = Cocaine::CommandLine.new(READER_SCRIPT, ":root_path :src_file :tmp_file")

begin
  puts line.run(
    root_path: ROOT_PATH,
    src_file:  SRC_EXCEL_PATH,
    tmp_file:  TMP_DATA_PATH
  )
rescue => e
  puts e.message
end