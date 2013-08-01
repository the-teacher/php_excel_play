# encoding: UTF-8
puts `clear`

require 'rubygems'
require 'cocaine'
require 'json'

ROOT_PATH      = File.dirname File.absolute_path(__FILE__)

TMPL_EXCEL_PATH = ROOT_PATH + "/files/excel_template.xlsx"
WRITER_SCRIPT   = ROOT_PATH + "/json2excel.php"
TMP_DATA_PATH   = ROOT_PATH + "/files/tmp.json"

line = Cocaine::CommandLine.new(WRITER_SCRIPT, ":tmp_file :template :output")

begin
  json = line.run(
    tmp_file: TMP_DATA_PATH,
    template: TMPL_EXCEL_PATH,
    output:   OUT_EXCEL_PATH
  )
rescue => e
  puts e.message
end