# encoding: UTF-8
puts `clear`

require 'rubygems'

require 'fileutils'
require 'cocaine'
require 'json'

ROOT_PATH       = File.dirname File.absolute_path(__FILE__)
WRITER_SCRIPT   = ROOT_PATH + "/converter/json2excel_base.php"
TMP_DATA_PATH   = ROOT_PATH + "/files/tmp.json"
TMPL_EXCEL_PATH = ROOT_PATH + "/files/excel_template.xlsx"
OUT_EXCEL_PATH  = ROOT_PATH + "/files/output_excel.xlsx"

FileUtils.rm(OUT_EXCEL_PATH, force: true)

line = Cocaine::CommandLine.new(WRITER_SCRIPT, ":root_path :tmp_file :template :output")

begin
  puts line.run(
    root_path: ROOT_PATH,
    tmp_file:  TMP_DATA_PATH,
    template:  TMPL_EXCEL_PATH,
    output:    OUT_EXCEL_PATH
  )
rescue => e
  puts e.message
end